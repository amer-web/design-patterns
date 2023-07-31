<?php


namespace App\Behavioral\TemplateMethod;


class CityJourney extends Journey
{
    protected function enjoyVacation(): string
    {
        return "Eat, drink, take photos and sleep";
    }
}