<?php


namespace App\Behavioral\Mediator;


class Airline
{
    public string $name;
    private array $availableFlights = [];

    public function __construct(string $name, array $availableFlights)
    {
        $this->name = $name;
        $this->availableFlights = $availableFlights;
    }

    public function checkAvailability(string $flightCode): bool
    {
        return in_array($flightCode, $this->availableFlights);
    }

    public function makeReservation(string $flightCode, string $passengerName): bool
    {
        // logic
        return true;
    }

}