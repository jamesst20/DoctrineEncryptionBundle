<?php
namespace SJ\DoctrineEncryptionBundle\Command;


use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class EncryptCommand extends ContainerAwareCommand
{

    protected function configure() {

        $this->setName('sj:db:encrypt')
            ->setDescription('Encrypt all the database')
            ->addArgument('encryptor', InputArgument::OPTIONAL, 'Class used for encryption');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $encryptorClass = $input->getArgument('encryptor');

        if(!$encryptorClass) {
            $encryptorClass = $this->getContainer()->getParameter('sj_doctrine_encryption.encryptor_class');
        } else if(!class_exists($encryptorClass)) {
            $output->writeln(sprintf('Given encryptor %s does not exist.', $encryptorClass));
            return;
        }

        $em = $this->getContainer()->get('doctrine.orm.entity_manager');

        $sjDoctrineEventSubscriber = $this->getContainer()->get('sj_doctrine_encryption.doctrine_subscriber');

        $previousEncryptor = $sjDoctrineEventSubscriber->replaceEncryptor(new $encryptorClass($this->getContainer()->getParameter('sj_doctrine_encryption.encryption_key')));
        $sjDoctrineEventSubscriber->setEncryptionEnabled(true); //Just in case it was for some reason previously disabled

        /** @var ClassMetadata[] $allMeta */
        $allMeta = $em->getMetadataFactory()->getAllMetadata();
        foreach ($allMeta as $meta) {
            $repository = $em->getRepository($meta->getName());
            
            $entities = $repository->findAll();
            
            foreach ($entities as $entity) {
                $sjDoctrineEventSubscriber->processEncryptAnnotationInEntity($entity, true);
                $em->persist($entity);
            }
        }
        $em->flush();

        //Reset the service to the default state
        $sjDoctrineEventSubscriber->replaceEncryptor($previousEncryptor);
    }
}