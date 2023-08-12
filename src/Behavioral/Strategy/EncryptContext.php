<?php


namespace App\Behavioral\Strategy;


class EncryptContext
{
    private EncryptStrategy $encryptStrategy;

    public function __construct(EncryptStrategy $encryptStrategy)
    {
        $this->encryptStrategy = $encryptStrategy;
    }

    /**
     * @param EncryptStrategy $encryptStrategy
     */
    public function setEncryptStrategy(EncryptStrategy $encryptStrategy): void
    {
        $this->encryptStrategy = $encryptStrategy;
    }

    public function encryptString($data)
    {
        return $this->encryptStrategy->encrypt($data);
    }
}