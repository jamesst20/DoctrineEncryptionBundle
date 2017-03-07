<?php
use SJ\DoctrineEncryptionBundle\Command\DecryptCommand;
use SJ\DoctrineEncryptionBundle\Command\EncryptCommand;
use SJ\DoctrineEncryptionBundle\EventListener\SJDoctrineEventSubscriber;
use SJ\ExampleBundle\DataFixtures\ORM\EncryptionEntityTestLoad;
use SJ\ExampleBundle\Tests\Abstracts\FixtureAwareKernelTestCase;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;


class CommandTest extends FixtureAwareKernelTestCase
{
    /** @var \Doctrine\ORM\EntityManager */
    private $em;

    /** @var  Application */
    private $application;

    public function setUp()
    {
        //parent::setUp(); //Do not load fixtures yet
        self::bootKernel();
        
        $this->em = static::$kernel->getContainer()->get('doctrine')->getManager();

        $this->application = new Application(static::$kernel);
        $this->application->add(new EncryptCommand());
        $this->application->add(new DecryptCommand());
    }

    public function testEncryptCommandShouldEncryptDatabase() {
        $doctrineSubscriber = static::$kernel->getContainer()->get('sj_doctrine_encryption.doctrine_subscriber');
        $doctrineSubscriber->setEncryptionEnabled(false);

        $this->loadFixtures();

        $repository = $this->em->getRepository('SJExampleBundle:EncryptionEntityTest');

        $entity = $repository->findOneBy(array());

        $this->assertEquals('FieldToEncryptAndDecrypt', $entity->getFieldToEncryptAndDecrypt());
        $this->assertEquals('FieldToEncryptOnly', $entity->getFieldToEncryptOnly());


        $command = $this->application->find('sj:db:encrypt');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array());

        $this->assertNotEquals('FieldToEncryptOnly', $entity->getFieldToEncryptOnly());
        $this->assertStringEndsWith(SJDoctrineEventSubscriber::$ENC_SUFFIX, $entity->getFieldToEncryptOnly());
    }

    public function testDecryptCommandShouldDecryptDatabase() {
        $this->loadFixtures();

        $repository = $this->em->getRepository('SJExampleBundle:EncryptionEntityTest');

        $entity = $repository->findOneBy(array());

        $this->assertNotEquals('FieldToEncryptOnly', $entity->getFieldToEncryptOnly());
        $this->assertStringEndsWith(SJDoctrineEventSubscriber::$ENC_SUFFIX, $entity->getFieldToEncryptOnly());

        $command = $this->application->find('sj:db:decrypt');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array());

        $this->assertEquals('FieldToEncryptOnly', $entity->getFieldToEncryptOnly());
    }

    public function testParameterException() {
        $command = $this->application->find('sj:db:decrypt');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array('encryptor' => 'dadsffdsfsd'));
        $this->assertContains('does not exist', $commandTester->getDisplay());

        $command = $this->application->find('sj:db:encrypt');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array('encryptor' => 'dadsffdsfsd'));
        $this->assertContains('does not exist', $commandTester->getDisplay());
    }

    private function loadFixtures() {
        $this->addFixture(new EncryptionEntityTestLoad());
        $this->executeFixtures();
    }

}