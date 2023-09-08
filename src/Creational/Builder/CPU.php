<?php


namespace App\Creational\Builder;


class CPU
{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }
}