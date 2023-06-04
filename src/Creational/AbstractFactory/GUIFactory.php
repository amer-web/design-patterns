<?php


namespace App\Creational\AbstractFactory;

interface GUIFactory
{
    public function createButton():Button;
    public function createCheckbox():Checkbox;
}