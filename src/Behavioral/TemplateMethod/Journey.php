<?php


namespace App\Behavioral\TemplateMethod;


abstract class Journey
{
    private array $thingsToDo = [];

    final public function takeATrip()
    {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();
    }

    private function buyAFlight(): string
    {
        return 'Buy a flight ticket';
    }

    private function takePlane(): string
    {
        return 'Taking the plane';
    }

    abstract protected function enjoyVacation(): string;

    final public function getThingsToDo(): array
    {
        return $this->thingsToDo;
    }

}