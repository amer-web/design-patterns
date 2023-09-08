<?php


namespace App\Structural\DataMapper;


class UserMapper
{
    public function __construct(private StorageManager $manager)
    {
    }

    public function findById($id)
    {
        return $this->manager->find($id);
    }

    public function save($user)
    {
        return $this->manager->save($user);
    }
}