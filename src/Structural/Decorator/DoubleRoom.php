<?php


namespace App\Structural\Decorator;


class DoubleRoom implements Booking
{

    public function price()
    {
        return 100;
    }

    public function getDescription()
    {
        return 'double room';
    }
}