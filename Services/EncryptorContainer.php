<?php

namespace SJ\DoctrineEncryptionBundle\Services;

use SJ\DoctrineEncryptionBundle\Encryptors\SJEncryptorInterface;

class EncryptorContainer
{
    /** @var  SJEncryptorInterface */
    private $encryptor;

    public function __construct($encryptorClass, $secretKey)
    {
        $reflectionClass = new \ReflectionClass($encryptorClass);

        $this->encryptor = $reflectionClass->newInstance($secretKey);
    }

    public function getEncryptor() {
        return $this->encryptor;
    }
}