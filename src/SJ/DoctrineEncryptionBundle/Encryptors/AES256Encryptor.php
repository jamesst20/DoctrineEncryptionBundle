<?php


namespace SJ\DoctrineEncryptionBundle\Encryptors;


class AES256Encryptor implements SJEncryptorInterface
{
    private $key;
    private $iv;


    /**
     * SJEncryptorInterface constructor.
     *
     * @param $secretKey string The secret key used for encryption
     */
    public function __construct($secretKey)
    {
        $this->key = md5($secretKey);
        $this->iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
    }

    /**
     * Encrypt the data
     *
     * @param $plainText string The plain data to encrypt
     * @return string The encryption result
     */
    public function encryptData($plainText)
    {
        return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $this->key, $plainText, MCRYPT_MODE_ECB, $this->iv)));
    }

    /**
     * Decrypt the data
     *
     * @param $encryptedData string The data encrypted
     * @return string The data decrypted
     */
    public function decryptData($encryptedData)
    {
        return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $this->key, base64_decode($encryptedData), MCRYPT_MODE_ECB, $this->iv));
    }
}