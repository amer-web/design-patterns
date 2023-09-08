<?php


namespace App\Structural\DataMapper;


class User
{
    public function __construct(public int $id,public string $email)
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }


}