<?php

namespace SJ\DoctrineEncryptionBundle\EventListener;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;
use ReflectionMethod;
use ReflectionObject;
use ReflectionProperty;
use RuntimeException;
use SJ\DoctrineEncryptionBundle\Annotation\Encrypt;
use SJ\DoctrineEncryptionBundle\Encryptors\SJEncryptorInterface;
use SJ\DoctrineEncryptionBundle\Services\EncryptorContainer;
use Symfony\Component\EventDispatcher\EventDispatcher;

class SJDoctrineEventSubscriber implements EventSubscriber
{
    private $annotationReader;

    /** @var EventDispatcher */
    private $eventDispatcher;

    /** @var SJEncryptorInterface $encryptor The encryptor used */
    private $encryptor;

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

        $propertiesToEncrypt = $this->getEncryptedProperties($entity);
        /** @var ReflectionProperty $propertyToEncrypt */
        foreach ($propertiesToEncrypt as $propertyToEncrypt) {
            /** @var Encrypt $encryptAnnotation */
            $encryptAnnotation = $this->annotationReader->getPropertyAnnotation($propertyToEncrypt, Encrypt::class);

            if (!$isEncryptOperation && !$encryptAnnotation->getShouldDecryptData()) continue;

            if ($encryptAnnotation->getUseGetterAndSetter()) {
                $setterMethodName = 'set' . ucfirst($propertyToEncrypt->getName());
                $getterMethodName = 'get' . ucfirst($propertyToEncrypt->getName());
                if (method_exists($entity, $getterMethodName) && method_exists($entity, $setterMethodName)) {
                    $setterMethod = new ReflectionMethod($entity, $setterMethodName);
                    $getterMethod = new ReflectionMethod($entity, $getterMethodName);
                    if ($isEncryptOperation) {
                        $setterMethod->invoke($entity, $this->encryptor->encryptData($getterMethod->invoke($entity)));
                    } else {
                        $setterMethod->invoke($entity, $this->encryptor->decryptData($getterMethod->invoke($entity)));
                    }
                } else {
                    throw new RuntimeException(sprintf("The setter $setterMethodName() or getter $getterMethodName() for property %s in class %s doesn't exist.", $propertyToEncrypt->getName(), get_class($entity)));
                }
            } else {
                $propertyToEncrypt->setAccessible(true);
                if ($isEncryptOperation) {
                    $propertyToEncrypt->setValue($entity, $this->encryptor->encryptData($propertyToEncrypt->getValue($entity)));
                } else {
                    $propertyToEncrypt->setValue($entity, $this->encryptor->decryptData($propertyToEncrypt->getValue($entity)));
                }

            }
        }
    }

    private function getEncryptedProperties($entity)
    {
        $properties = array();
        $reflectionObject = new ReflectionObject($entity);
        foreach ($reflectionObject->getProperties() as $reflectionProperty) {
            $propertyEncryptAnnotation = $this->annotationReader->getPropertyAnnotation($reflectionProperty, Encrypt::class);

            if ($propertyEncryptAnnotation != null) {
                $properties[] = $reflectionProperty;
            }
        }
        return $properties;
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