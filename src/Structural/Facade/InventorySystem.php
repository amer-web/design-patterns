<?php


namespace App\Structural\Facade;


class InventorySystem
{
    public function checkAvailability($product)
    {
        return rand(0,1);
    }
}