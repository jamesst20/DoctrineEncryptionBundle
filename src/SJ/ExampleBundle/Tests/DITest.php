<?php
use SJ\DoctrineEncryptionBundle\DependencyInjection\Configuration;
use SJ\DoctrineEncryptionBundle\DependencyInjection\SJDoctrineEncryptionExtension;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class DITests extends KernelTestCase
{

    public function setUp()
    {
        self::bootKernel();
    }

    public function testParametersAreConfigurable() {
        /** @var \Symfony\Component\Config\Definition\ArrayNode $configs */
        $configs = (new Configuration())->getConfigTreeBuilder()->buildTree();

        $this->assertContains('encryptor_class', array_keys($configs->getChildren()));
        $this->assertContains('encryption_key', array_keys($configs->getChildren()));
    }
    
    public function testParametersWithSpecificEncryptionKeyShouldUseThatKey() {
        $encryptionKey = 'dlkfjdfskjhsdf';

        $config = array('sj_doctrine_encryption' => array('encryptor_class' => '', 'encryption_key' => $encryptionKey));
        $containerBuilder = new ContainerBuilder();
        (new SJDoctrineEncryptionExtension())->load($config, $containerBuilder);

        $this->assertEquals($encryptionKey, $containerBuilder->getParameter('sj_doctrine_encryption.encryption_key'));
    }

    public function testParametersWithoutSpecificEncryptionKeyShouldUseSecretKey() {
        $secretKey = 'secret_key';

        $config = array('sj_doctrine_encryption' => array('encryptor_class' => '', 'encryption_key' => ''));
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->setParameter('secret', $secretKey);
        (new SJDoctrineEncryptionExtension())->load($config, $containerBuilder);

        $this->assertEquals($secretKey, $containerBuilder->getParameter('sj_doctrine_encryption.encryption_key'));
    }

    public function testParametersWithoutSpecificEncryptionKeyAndSecretShouldThrowException() {
        $config = array('sj_doctrine_encryption' => array('encryptor_class' => '', 'encryption_key' => ''));
        $containerBuilder = new ContainerBuilder();

        $exceptionTrown = false;
        try {
            (new SJDoctrineEncryptionExtension())->load($config, $containerBuilder);
        } catch(RuntimeException $e) {
            $exceptionTrown = true;
        }

       $this->assertTrue($exceptionTrown);
    }

    public function testParametersWithSpecificEncryptionClassShouldUseThatClass() {
        $config = array('sj_doctrine_encryption' => array('encryptor_class' => DITests::class, 'encryption_key' => 'gfdgfsgffdg'));
        $containerBuilder = new ContainerBuilder();

        (new SJDoctrineEncryptionExtension())->load($config, $containerBuilder);

        $this->assertEquals(DITests::class, $containerBuilder->getParameter('sj_doctrine_encryption.encryptor_class'));
    }

}