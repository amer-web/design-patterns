<?php


namespace App\Creational\AbstractFactory\WinFactory;

use App\Creational\AbstractFactory\Button;
use App\Creational\AbstractFactory\Checkbox;
use App\Creational\AbstractFactory\GUIFactory;

class WinFactory implements GUIFactory
{

    public function createButton(): Button
    {
      return  new WinButton();
    }

    public function createCheckbox(): Checkbox
    {
       return new WinCheckbox();
    }
}