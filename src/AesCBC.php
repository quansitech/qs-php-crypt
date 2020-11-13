<?php
namespace QsCrypt;

class AesCBC{

    public static function encrypt($plainText, $key){
        $enKey = substr(hash('sha256', $key), 0, 32);

        $iv = substr($enKey, 0, 16);

        return base64_encode(openssl_encrypt($plainText, "AES-256-CBC", $enKey, OPENSSL_RAW_DATA, $iv));
    }

    public static function decrypt($cipherText, $key){
        $enKey = substr(hash('sha256', $key), 0, 32);

        $iv = substr($enKey, 0, 16);

        return openssl_decrypt(base64_decode($cipherText), "AES-256-CBC", $enKey, OPENSSL_RAW_DATA, $iv);
    }
}