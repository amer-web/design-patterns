<?php


namespace App\Behavioral\Strategy;


class Md5Encrypt implements EncryptStrategy
{

    public function encrypt(string $data)
    {
       return md5($data);
    }
}