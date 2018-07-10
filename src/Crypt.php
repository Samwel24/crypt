<?php

namespace Dreamaker\Crypt;

use Dreamaker\Crypt\CryptVault;
use Dreamaker\Crypt\CryptInterface;

class Crypt implements CryptInterface {

    static public function encrypt()
    {

        $param = func_get_arg(0);

        $output = openssl_encrypt($param, CryptVault::$encrypt_method, CryptVault::key(), 0, CryptVault::iv());

        $output = base64_encode($output);

        return $output;

    }

    static public function decrypt()
    {
        $param = func_get_arg(0);

        $output = openssl_decrypt(base64_decode($param), CryptVault::$encrypt_method, CryptVault::key(), 0, CryptVault::iv());

        return $output;
    }
}
