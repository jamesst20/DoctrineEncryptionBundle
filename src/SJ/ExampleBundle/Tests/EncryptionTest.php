<?php


use Doctrine\ORM\Event\LifecycleEventArgs;
use SJ\DoctrineEncryptionBundle\Encryptors\AES256Encryptor;
use SJ\DoctrineEncryptionBundle\EventListener\SJDoctrineEventSubscriber;
use SJ\DoctrineEncryptionBundle\Services\EncryptorContainer;
use SJ\ExampleBundle\Entity\EncryptionEntityTest;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class EncryptionTest extends KernelTestCase
{
    /** @var \Doctrine\ORM\EntityManager */
    private $em;

    public function setUp()
    {
        self::bootKernel();

        $this->em = static::$kernel->getContainer()->get('doctrine')->getManager();
    }

    protected function tearDown()
    {
        parent::tearDown();

        $this->em->close();
    }

    public function testEncryptorAnnotationShouldEncryptDataOnAllPreEvents() {
        $value = 'value';

        $eventSubscriber = new SJDoctrineEventSubscriber(new EncryptorContainer(AES256Encryptor::class, 'secret_key'), static::$kernel->getContainer()->get('event_dispatcher'));

        $entity1 = (new EncryptionEntityTest())->setFieldToEncryptOnly($value)->setFieldToEncryptAndDecrypt($value)->setFieldNotEncrypted($value);
        $entity2 = (new EncryptionEntityTest())->setFieldToEncryptOnly($value)->setFieldToEncryptAndDecrypt($value)->setFieldNotEncrypted($value);

        $eventSubscriber->prePersist(new LifecycleEventArgs($entity1, static::$kernel->getContainer()->get('doctrine.orm.entity_manager')));
        $eventSubscriber->preUpdate(new LifecycleEventArgs($entity2, static::$kernel->getContainer()->get('doctrine.orm.entity_manager')));

        foreach ([$entity1, $entity2] as $entity) {
            $this->assertEquals($value, $entity->getFieldNotEncrypted());
            $this->assertNotEquals($value, $entity->getFieldToEncryptOnly());
            $this->assertNotEquals($value, $entity->getFieldToEncryptAndDecrypt());
            $this->assertStringEndsWith(SJDoctrineEventSubscriber::$ENC_SUFFIX, $entity->getFieldToEncryptOnly());
        }

        return [$eventSubscriber, $entity1];
    }

    /**
     * @depends testEncryptorAnnotationShouldEncryptDataOnAllPreEvents
     */
    public function testEncryptorAnnotationShouldDecryptDataOnAllPostEvents(array $args) {
        $value = 'value';
        $eventSubscriber = $args[0];
        $encryptedEntity = $args[1];

        $entity1 = clone($encryptedEntity);
        $entity2 = clone($encryptedEntity);
        $entity3 = clone($encryptedEntity);


        $eventSubscriber->postLoad(new LifecycleEventArgs($entity1, static::$kernel->getContainer()->get('doctrine.orm.entity_manager')));
        $eventSubscriber->postPersist(new LifecycleEventArgs($entity2, static::$kernel->getContainer()->get('doctrine.orm.entity_manager')));
        $eventSubscriber->postUpdate(new LifecycleEventArgs($entity3, static::$kernel->getContainer()->get('doctrine.orm.entity_manager')));

        foreach([$entity1, $entity2, $entity3] as $entity) {
            $this->assertEquals($value, $entity->getFieldToEncryptAndDecrypt());
            $this->assertNotEquals($encryptedEntity->getFieldToEncryptAndDecrypt(), $entity->getFieldToEncryptAndDecrypt());
            $this->assertEquals($encryptedEntity->getFieldToEncryptOnly(), $entity->getFieldToEncryptOnly());
            $this->assertNotEquals($value, $entity->getFieldToEncryptOnly());
            $this->assertEquals($value, $entity->getFieldNotEncrypted());
            $this->assertEquals($encryptedEntity->getFieldNotEncrypted(), $entity->getFieldNotEncrypted());
            $this->assertStringEndsNotWith(SJDoctrineEventSubscriber::$ENC_SUFFIX, $entity->getFieldToEncryptAndDecrypt());
            $this->assertStringEndsNotWith(SJDoctrineEventSubscriber::$ENC_SUFFIX, $entity->getFieldNotEncrypted());
            $this->assertStringEndsWith(SJDoctrineEventSubscriber::$ENC_SUFFIX, $entity->getFieldToEncryptOnly());
        }
    }

    public function testDoubleEncryptionShouldNotReEncrypt() {
        $value = 'value';

        $eventSubscriber = new SJDoctrineEventSubscriber(new EncryptorContainer(AES256Encryptor::class, 'secret_key'), static::$kernel->getContainer()->get('event_dispatcher'));

        $entity1 = (new EncryptionEntityTest())->setFieldToEncryptOnly($value)->setFieldToEncryptAndDecrypt($value)->setFieldNotEncrypted($value);
        $entity2 = (new EncryptionEntityTest())->setFieldToEncryptOnly($value)->setFieldToEncryptAndDecrypt($value)->setFieldNotEncrypted($value);

        $eventSubscriber->prePersist(new LifecycleEventArgs($entity1, static::$kernel->getContainer()->get('doctrine.orm.entity_manager')));
        $eventSubscriber->prePersist(new LifecycleEventArgs($entity2, static::$kernel->getContainer()->get('doctrine.orm.entity_manager')));
        $eventSubscriber->prePersist(new LifecycleEventArgs($entity2, static::$kernel->getContainer()->get('doctrine.orm.entity_manager')));

        $this->assertEquals($entity1->getFieldToEncryptOnly(), $entity2->getFieldToEncryptOnly());
        $this->assertEquals($entity1->getFieldToEncryptAndDecrypt(), $entity2->getFieldToEncryptAndDecrypt());
    }

    
}