<?php

namespace SJ\ExampleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SJ\DoctrineEncryptionBundle\Annotation\Encrypt;

/**
 * EncryptionEntityTest
 *
 * @ORM\Table(name="encryption_entity_test")
 * @ORM\Entity(repositoryClass="SJ\ExampleBundle\Repository\EncryptionEntityTestRepository")
 */
class EncryptionEntityTest
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="fieldToEncryptAndDecrypt", type="string", length=255, nullable=true)
     *
     * @Encrypt(decryptData=true)
     */
    private $fieldToEncryptAndDecrypt;

    /**
     * @var string
     *
     * @ORM\Column(name="fieldToEncryptOnly", type="string", length=255, nullable=true)
     *
     * @Encrypt(decryptData=false)
     */
    private $fieldToEncryptOnly;

    /**
     * @var string
     *
     * @ORM\Column(name="fieldNotEncrypted", type="string", length=255, nullable=true)
     */
    private $fieldNotEncrypted;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set field1
     *
     * @param string $fieldToEncryptAndDecrypt
     *
     * @return EncryptionEntityTest
     */
    public function setFieldToEncryptAndDecrypt($fieldToEncryptAndDecrypt)
    {
        $this->fieldToEncryptAndDecrypt = $fieldToEncryptAndDecrypt;

        return $this;
    }

    /**
     * Get field1
     *
     * @return string
     */
    public function getFieldToEncryptAndDecrypt()
    {
        return $this->fieldToEncryptAndDecrypt;
    }

    /**
     * Set field2
     *
     * @param string $fieldToEncryptOnly
     *
     * @return EncryptionEntityTest
     */
    public function setFieldToEncryptOnly($fieldToEncryptOnly)
    {
        $this->fieldToEncryptOnly = $fieldToEncryptOnly;

        return $this;
    }

    /**
     * Get field2
     *
     * @return string
     */
    public function getFieldToEncryptOnly()
    {
        return $this->fieldToEncryptOnly;
    }

    /**
     * @return string
     */
    public function getFieldNotEncrypted()
    {
        return $this->fieldNotEncrypted;
    }

    /**
     * @param string $fieldNotEncrypted
     */
    public function setFieldNotEncrypted($fieldNotEncrypted)
    {
        $this->fieldNotEncrypted = $fieldNotEncrypted;

        return $this;
    }
}

