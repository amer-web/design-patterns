<?php


namespace App\Creational\FactoryMethod;

class WebDialog extends Dialog
{

    public function createButton(): Button
    {
        return new webButton();
    }
}