<?php


namespace App\Behavioral\Strategy;


class HashEncrypt implements EncryptStrategy
{

    public function encrypt(string $data)
    {
        return hash('sha256', $data);
    }
}