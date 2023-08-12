<?php


namespace App\Behavioral\Strategy;


class Base64Encrypt implements EncryptStrategy
{

    public function encrypt(string $data)
    {
        return base64_encode($data);
    }
}