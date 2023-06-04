<?php


namespace App\Structural\Decorator;


class ExtraBed extends BookingDecorator
{
    const PRICE = 20;

    public function price()
    {
        return $this->booking->price() + self::PRICE;
    }

    public function getDescription()
    {
        return $this->booking->getDescription() . ' with bed';
    }
}