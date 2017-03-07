<?php


namespace SJ\DoctrineEncryptionBundle\Event;


final class SJEvents
{
    /**
     *  Event raised before the encryption. The encryptor is already instantiated.
     */
    const onPreEncryptEvent = 'sj_doctrine_encryption.pre_encrypt_event';

    /**
     *  Event raised after the encryption. At this point, the data is encrypted in the entity but not persisted yet.
     */
    const onPostEncryptEvent = 'sj_doctrine_encryption.post_encrypt_event';

    /**
     *  Event raised before the decryption. The decryptor is already instantiated. This event is not called if the decryption is disabled on the property.
     */
    const onPreDecryptEvent = 'sj_doctrine_encryption.pre_decrypt_event';

    /**
     *  Event raised after the decryption. This event is not called if the decryption is disabled on the property.
     */
    const onPostDecryptEvent = 'sj_doctrine_encryption.post_decrypt_event';
}