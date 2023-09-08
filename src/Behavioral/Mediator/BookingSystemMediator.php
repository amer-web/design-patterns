<?php


namespace App\Behavioral\Mediator;


interface BookingSystemMediator
{
    /* Imagine a flight booking system where airlines, travel agencies,
     and passengers interact through a central booking system (mediator).
     The booking system handles flight availability, reservations, and notifications.*/

    public function bookFlight(string $flightCode, string $passengerName): bool;

    public function registerAirline(Airline $airline);

    public function registerTravelAgency(TravelAgency $travelAgency);
}