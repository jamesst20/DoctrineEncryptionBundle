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
        $this->iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    }

    /**
     * Encrypt the data
     *
     * @param $plainText string The plain data to encrypt
     * @return string The encryption result
     */
    public function encryptData($plainText)
    {
        return trim(base64_encode(openssl_encrypt($plainText, 'aes-256-cbc', $this->key, 0, $this->iv)  . ':' . base64_encode($this->iv)));
    }

    /**
     * Decrypt the data
     *
     * @param $encryptedData string The data encrypted
     * @return string The data decrypted
     */
    public function decryptData($encryptedData)
    {
        $parts = explode(':', base64_decode($encryptedData));
        return trim(openssl_decrypt($parts[0], 'aes-256-cbc', $this->key, 0, base64_decode($parts[1])));
    }
}