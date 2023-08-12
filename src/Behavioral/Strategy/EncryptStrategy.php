<?php


namespace App\Behavioral\Strategy;


interface EncryptStrategy
{
    public function encrypt(string $data);
}