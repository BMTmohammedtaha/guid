<?php

namespace Bmt\Guid;

class GuidGenerator {
    /**
     * Generates a GUID (Globally Unique Identifier) incorporating a custom key.
     *
     * @param string $customKey Optional. Custom key to incorporate into the GUID.
     * @return string The generated GUID.
     */
    public static function generateGuid(string $customKey = '') :string
     {
        $hash = md5(uniqid($customKey, true));
        
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }
        
        return sprintf(
            '%08s-%04s-%04x-%04x-%12s',
            substr($hash, 0, 8),
            substr($hash, 8, 4),
            mt_rand(0, 65535),
            mt_rand(16384, 20479),
            substr($hash, 12, 12)
        );
    }
}