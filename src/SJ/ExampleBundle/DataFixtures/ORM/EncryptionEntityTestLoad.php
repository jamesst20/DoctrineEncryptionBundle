<?php


namespace SJ\ExampleBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SJ\ExampleBundle\Entity\EncryptionEntityTest;

class EncryptionEntityTestLoad implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $entity = new EncryptionEntityTest();
        $entity->setFieldToEncryptAndDecrypt('EncryptAndDecrypt!');
        $entity->setFieldToEncryptOnly('EncryptOnly!');
        $entity->setFieldNotEncrypted('ThisShouldNotBeEncryptedAtAll');
        $manager->persist($entity);
        $manager->flush();
    }
    
}