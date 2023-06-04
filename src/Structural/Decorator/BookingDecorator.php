<?php


namespace App\Structural\Decorator;


abstract class BookingDecorator implements Booking
{
    protected Booking $booking;

    /**
     * BookingDecorator constructor.
     * @param Booking $booking
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

}