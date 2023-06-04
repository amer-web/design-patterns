<?php


namespace App\Creational\AbstractFactory\MacFactory;
use App\Creational\AbstractFactory\Button;
use App\Creational\AbstractFactory\Checkbox;
use App\Creational\AbstractFactory\GUIFactory;


class MacFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new MacCheckbox();
    }
}