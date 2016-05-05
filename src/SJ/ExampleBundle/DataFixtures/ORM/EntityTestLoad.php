<?php


namespace SJ\ExampleBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SJ\ExampleBundle\Entity\EntityTest;

class EntityTestLoad implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $entity = new EntityTest();
        $entity->setFirstName('James');
        $entity->setLastName('St-Pierre');
        $entity->setDescription('The king of the king');
        $entity->setDate(new \DateTime('now'));
        $manager->persist($entity);
        $manager->flush();
    }
    
}