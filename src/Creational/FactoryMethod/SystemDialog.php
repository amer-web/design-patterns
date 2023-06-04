<?php


namespace App\Creational\FactoryMethod;


class SystemDialog extends Dialog
{

    public function createButton(): Button
    {
        return new SystemButton();
    }
}