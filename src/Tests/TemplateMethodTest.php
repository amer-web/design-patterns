<?php


namespace App\Tests;


use App\Behavioral\TemplateMethod\BeachJourney;
use App\Behavioral\TemplateMethod\CityJourney;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testCanGetOnVacationOnTheBeach()
    {
        $beachJourney = new BeachJourney();
        $beachJourney->takeATrip();

        $this->assertSame(
            [
                'Buy a flight ticket',
                'Taking the plane',
                'Swimming and sun-bathing'
            ],
            $beachJourney->getThingsToDo()
        );
    }

    public function testCanGetOnAJourneyToACity()
    {
        $cityJourney = new CityJourney();
        $cityJourney->takeATrip();

        $this->assertSame(
            [
                'Buy a flight ticket',
                'Taking the plane',
                'Eat, drink, take photos and sleep'
            ],
            $cityJourney->getThingsToDo()
        );
    }

}