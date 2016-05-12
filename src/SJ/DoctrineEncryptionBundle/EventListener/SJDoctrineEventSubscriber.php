<?php

namespace SJ\DoctrineEncryptionBundle\EventListener;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;
use ReflectionClass;
use ReflectionMethod;
use ReflectionObject;
use ReflectionProperty;
use RuntimeException;
use SJ\DoctrineEncryptionBundle\Annotation\Encrypt;
use SJ\DoctrineEncryptionBundle\Encryptors\SJEncryptorInterface;
use SJ\DoctrineEncryptionBundle\Event\SJEncryptEvent;
use SJ\DoctrineEncryptionBundle\Event\SJEvents;
use SJ\DoctrineEncryptionBundle\Services\EncryptorContainer;
use Symfony\Component\EventDispatcher\EventDispatcher;

class SJDoctrineEventSubscriber implements EventSubscriber
{
    private $annotationReader;

    /** @var EventDispatcher */
    private $eventDispatcher;

    /** @var SJEncryptorInterface $encryptor The encryptor used */
    private $encryptor;

    public static $ENC_SUFFIX = '<ENC>';

    public function __construct(EncryptorContainer $encryptorContainer, $eventDispatcher)
    {
        $this->annotationReader = new AnnotationReader();
        $this->eventDispatcher = $eventDispatcher;
        $this->encryptor = $encryptorContainer->getEncryptor();
    }

    public function prePersist(LifecycleEventArgs $event)
    {
        $this->processEncryptAnnotationInEntity($event->getEntity(), true);
    }

    public function preUpdate(LifecycleEventArgs $event)
    {
        $this->processEncryptAnnotationInEntity($event->getEntity(), true);
    }

    public function postPersist(LifecycleEventArgs $event)
    {
        $this->processEncryptAnnotationInEntity($event->getEntity(), false);
    }

    public function postUpdate(LifecycleEventArgs $event)
    {
        $this->processEncryptAnnotationInEntity($event->getEntity(), false);
    }

    public function postLoad(LifecycleEventArgs $event)
    {
        $this->processEncryptAnnotationInEntity($event->getEntity(), false);
    }


    private function processEncryptAnnotationInEntity($entity, $isEncryptOperation)
    {

        $propertiesToProcess = $this->getEncryptedProperties($entity);
        /** @var ReflectionProperty $propertyToProcess */
        foreach ($propertiesToProcess as $propertyToProcess) {
            $propertyToProcess->setAccessible(true);

            /** @var Encrypt $encryptAnnotation */
            $encryptAnnotation = $this->annotationReader->getPropertyAnnotation($propertyToProcess, Encrypt::class);

            if (!$isEncryptOperation && !$encryptAnnotation->getShouldDecryptData()) continue;

            if (!is_string($propertyToProcess->getValue($entity)))
                throw new RuntimeException(sprintf('Failed to encrypt propery %s in class %s. Encryption currently only supports string in entity.', $propertyToProcess->getName(), $propertyToProcess->getDeclaringClass()->getName()));

            //Make sure we are not decrypting non encrypted data
            if (!$isEncryptOperation && !$this->endsWith($propertyToProcess->getValue($entity), SJDoctrineEventSubscriber::$ENC_SUFFIX)) continue;
            //Make sure it's not already encrypted.
            if ($isEncryptOperation && $this->endsWith($propertyToProcess->getValue($entity), SJDoctrineEventSubscriber::$ENC_SUFFIX)) continue;

            if ($isEncryptOperation) {
                /** Dispatch the preEncrypt event */
                $this->eventDispatcher->dispatch(SJEvents::onPreEncryptEvent, new SJEncryptEvent($this->encryptor, $entity));
                /** Do the encryption */
                $propertyToProcess->setValue($entity, $this->encryptor->encryptData($propertyToProcess->getValue($entity)) . SJDoctrineEventSubscriber::$ENC_SUFFIX);
                /** Dispatch the postEncrypt event */
                $this->eventDispatcher->dispatch(SJEvents::onPostEncryptEvent, new SJEncryptEvent($this->encryptor, $entity));
            } else {
                /** Dispatch the preDecrypt event */
                $this->eventDispatcher->dispatch(SJEvents::onPreDecryptEvent, new SJEncryptEvent($this->encryptor, $entity));
                /** Do the decryption */
                $propertyToProcess->setValue($entity, $this->encryptor->decryptData(substr($propertyToProcess->getValue($entity), 0, strlen($propertyToProcess->getValue($entity)) - strlen(SJDoctrineEventSubscriber::$ENC_SUFFIX))));
                /** Dispatch the postDecrypt event */
                $this->eventDispatcher->dispatch(SJEvents::onPostDecryptEvent, new SJEncryptEvent($this->encryptor, $entity));
            }
        }
    }

    private function getEncryptedProperties($entity)
    {
        $properties = array();
        $reflectionClass = new ReflectionClass($entity);
        do {
            foreach ($reflectionClass->getProperties() as $reflectionProperty) {
                $propertyEncryptAnnotation = $this->annotationReader->getPropertyAnnotation($reflectionProperty, Encrypt::class);

                if ($propertyEncryptAnnotation != null) {
                    $properties[] = $reflectionProperty;
                }
            }
        } while (($reflectionClass = $reflectionClass->getParentClass()) != null);

        return $properties;
    }

    private function endsWith($text, $find)
    {
        return $find === "" || (($temp = strlen($text) - strlen($find)) >= 0 && strpos($text, $find, $temp) !== false);
    }

    /**
     * Returns an array of events this subscriber wants to listen to.
     *
     * @return array
     */
    public function getSubscribedEvents()
    {
        return array(
            Events::prePersist,
            Events::postPersist,
            Events::preUpdate,
            Events::postUpdate,
            Events::postLoad
        );
    }

}