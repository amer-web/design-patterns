<?php


namespace App\Creational\AbstractFactory\MacFactory;


use App\Creational\AbstractFactory\Button;

class MacButton implements Button
{

    public function paint()
    {
        echo "Render a button in macOS style";
    }
}