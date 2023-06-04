<?php


namespace App\Creational\AbstractFactory\MacFactory;


use App\Creational\AbstractFactory\Checkbox;

class MacCheckbox implements Checkbox
{

    public function paint()
    {
        echo " Render a checkbox in macOS style..";
    }
}