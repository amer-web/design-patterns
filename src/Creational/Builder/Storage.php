<?php


namespace App\Creational\Builder;


class Storage
{
    private $type;
    private $capacity;

    public function __construct($type, $capacity) {
        $this->type = $type;
        $this->capacity = $capacity;
    }
}