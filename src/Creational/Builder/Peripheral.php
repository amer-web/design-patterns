<?php


namespace App\Creational\Builder;


class Peripheral
{
    private $type;

    public function __construct($type) {
        $this->type = $type;
    }
}