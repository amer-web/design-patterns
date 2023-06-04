<?php


namespace App\Creational\AbstractFactory\WinFactory;


use App\Creational\AbstractFactory\Checkbox;

class WinCheckbox implements Checkbox
{

    public function paint()
    {
        echo " Render a checkbox in Windows style.";
    }
}