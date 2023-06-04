<?php


namespace App\Creational\AbstractFactory;


class Application
{
    private $factory;
    public function __construct(GUIFactory $factory)
    {
        $this->factory = $factory;
    }
    public function createUi()
    {
        return $this->factory->createButton()->paint(). $this->factory->createCheckbox()->paint();
    }
}