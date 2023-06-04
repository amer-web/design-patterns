<?php


namespace App\Creational\FactoryMethod;

abstract class Dialog
{
    abstract public function createButton(): Button;

    public function renderDialog()
    {
        $dialog = $this->createButton();
        return "############### {$dialog->show()} ##########";
    }
}