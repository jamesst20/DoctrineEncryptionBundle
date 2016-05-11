<?php

namespace SJ\ExampleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SJ\DoctrineEncryptionBundle\Annotation\Encrypt;

class ParentEntity
{
    /**
     * @var string
     *
     * @ORM\Column(name="parentProperty", type="string", length=255, nullable=true)
     *
     * @Encrypt(decryptData=false)
     */
    private $parentProperty;

    public function getParentProperty() {
        return $this->parentProperty;
    }

    public function setParentProperty($parentProperty) {
        $this->parentProperty = $parentProperty;

        return $this;
    }

}