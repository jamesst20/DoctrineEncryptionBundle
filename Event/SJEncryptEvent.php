<?php

namespace SJ\DoctrineEncryptionBundle\Event;

use SJ\DoctrineEncryptionBundle\Encryptors\SJEncryptorInterface;
use Symfony\Component\EventDispatcher\Event;

class SJEncryptEvent extends Event
{
    private $encryptor;
    private $entity;

    public function __construct(SJEncryptorInterface $encryptor, $entity)
    {
        $this->encryptor = $encryptor;
    }

    /**
     * Get the entity that is about to be encrypted or decrypted
     *
     * @return mixed the entity
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Get the encryptor that will be used for encryption or decryption
     *
     * @return SJEncryptorInterface encryptor
     */
    public function getEncryptor()
    {
        return $this->encryptor;
    }
}