<?php

namespace SJ\DoctrineEncryptionBundle\Annotation;

use InvalidArgumentException;

/**
 * Class Encrypt
 * This is the Encrypt annotation class.
 *
 * @package SJ\DoctrineEncryptionBundle\Annotation
 *
 * @Annotation
 */
class Encrypt
{
    private $decryptData = false;

    public function __construct($options)
    {
        foreach ($options as $key => $value) {
            if(!property_exists($this, $key)) {
                throw new InvalidArgumentException("The property $key doesn't exist in the Encrypt annotation");
            } else {
                $this->$key = $value;
            }
        }

        if(!is_bool($this->decryptData)) {
            throw new InvalidArgumentException('The property decryptData must be a boolean');
        }
    }

    public function getShouldDecryptData() {
        return $this->decryptData;
    }

}