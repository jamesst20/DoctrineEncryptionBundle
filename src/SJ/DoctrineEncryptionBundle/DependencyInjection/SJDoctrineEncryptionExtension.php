<?php

namespace SJ\DoctrineEncryptionBundle\DependencyInjection;

use RuntimeException;
use SJ\DoctrineEncryptionBundle\Encryptors\TestEncryptor;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class SJDoctrineEncryptionExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        //Set default parameters value
        if(empty($config['encryptor_class'])) {
            $config['encryptor_class'] = TestEncryptor::class;
        }

        if(empty($config['encryption_key'])) {
            if($container->hasParameter('secret')) {
                $config['encryption_key'] = $container->getParameter('secret');
            } else {
                throw new RuntimeException('You must declare in your config.yml the "encryption_key" for SJDoctrineEncryptionBundle or declare the parameter "secret" for your bundle in parameters.yml.');
            }
        }

        //Make default parameters active
        $container->setParameter('sj_doctrine_encryption.encryptor_class', $config['encryptor_class']);
        $container->setParameter('sj_doctrine_encryption.encryption_key', $config['encryption_key']);

        //Load services configuration
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
