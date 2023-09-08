<?php


namespace App\Structural\DataMapper;


interface StorageManager
{
    public function find(string|int $id);
    public function save(User $user);
}