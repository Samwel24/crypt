<?php

namespace Dreamaker\Crypt;

abstract class CryptVault{

    static protected $output = false;

    static public $encrypt_method = "AES-256-CBC";
    
    static public $secret_key = 'This is crypt key';

    static public $secret_iv = 'This is crypting iv';

    static public function key()
    {
        return hash('sha256', static::$secret_key);
    }
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    static public function iv()
    {
        return substr(hash('sha256', static::$secret_iv), 0, 16);
    }

}