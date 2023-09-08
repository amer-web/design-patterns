<?php


namespace App\Creational\Builder;


class RAM
{
    private $size;

    public function __construct($size) {
        $this->size = $size;
    }
}