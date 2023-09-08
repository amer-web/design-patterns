<?php


namespace App\Behavioral\Mediator;


class TravelAgency
{
    private $travel_name;
    private $mediator;

    public function __construct(string $travel_name, BookingSystemMediator $mediator)
    {
        $this->travel_name = $travel_name;
        $this->mediator = $mediator;
        $this->mediator->registerTravelAgency($this);
    }

    public function bookFlightForPassenger(string $flightCode, string $passengerName): bool
    {
        return $this->mediator->bookFlight($flightCode, $passengerName);
    }
}