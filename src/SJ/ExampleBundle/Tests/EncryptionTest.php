<?php


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

    public function testEncryptAnnotationShouldEncryptInDatabase() {
        /*$encryptionEntityTestRepository = $this->em->getRepository('SJExampleBundle:EncryptionEntityTest');
        $encryptionEntityTestRepository->clear();

        $value = 'Woohoo';

        $encryptionEntityTest = (new EncryptionEntityTest())
            ->setFieldToEncryptAndDecrypt($value)
            ->setFieldToEncryptOnly($value)
            ->setFieldNotEncrypted($value);

        $this->em->getClassMetadata(get_class($encryptionEntityTest))->setLifecycleCallbacks(array());
        //Persist
        $this->em->persist($encryptionEntityTest);
        $this->em->flush();

        //Backup lifecycle events
        $events = $this->em->getClassMetadata(get_class($encryptionEntityTest))->lifecycleCallbacks;
        //Remove lifecycle events
        $this->em->getClassMetadata(get_class($encryptionEntityTest))->setLifecycleCallbacks(array());
        //Restore lifecycle events
        //$this->em->getClassMetadata(get_class($encryptionEntityTest))->setLifecycleCallbacks($events);

        $this->assertEquals($value, $encryptionEntityTestRepository->findOneBy(array())->getFieldToEncryptAndDecrypt());
        */
    }
    
}