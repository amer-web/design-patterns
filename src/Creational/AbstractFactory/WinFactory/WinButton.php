<?php


namespace App\Creational\AbstractFactory\WinFactory;


use App\Creational\AbstractFactory\Button;

class WinButton implements Button
{

    public function paint()
    {
        echo "Render a button in Windows style.";
    }
}