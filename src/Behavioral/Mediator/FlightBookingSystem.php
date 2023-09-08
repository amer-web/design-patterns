<?php


namespace App\Behavioral\Mediator;


class FlightBookingSystem implements BookingSystemMediator
{
    private array $airlines = [];
    private array $travelAgencies = [];

    public function bookFlight(string $flightCode, string $passengerName): bool
    {
        foreach ($this->airlines as $airline) {
            if ($airline->checkAvailability($flightCode)) {
                $reservation = $airline->makeReservation($flightCode, $passengerName);
                if ($reservation) {
                    echo $this->notifyPassenger($passengerName, "message from airline Your flight is booked: $flightCode by airline $airline->name");
                    return true;
                }
            }
        }
        return false;

    }

    public function registerAirline(Airline $airline)
    {
        $this->airlines[] = $airline;
    }

    public function registerTravelAgency(TravelAgency $travelAgency)
    {
        $this->travelAgencies[] = $travelAgency;
    }

    public function notifyPassenger(string $passengerName, string $message)
    {
        echo "Passenger $passengerName: $message\n";
        return true;
    }
}