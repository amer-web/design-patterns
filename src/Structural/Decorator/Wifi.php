<?php


namespace App\Structural\Decorator;


class Wifi extends BookingDecorator
{

    public function price()
    {
        return $this->booking->price() + 5;
    }

    public function getDescription()
    {
        return $this->booking->getDescription() . ' and wifi';
    }
}