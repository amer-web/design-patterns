<?php


namespace App\Tests;


use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceForDoubleWithWifi()
    {
        $double_room = new \App\Structural\Decorator\DoubleRoom();
        $wifi = new \App\Structural\Decorator\Wifi($double_room);
        $this->assertSame(105,$wifi->price());
    }
}