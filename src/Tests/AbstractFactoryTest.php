<?php


namespace App\Tests;

use App\Creational\AbstractFactory\Application;
use App\Creational\AbstractFactory\MacFactory\MacFactory;
use App\Creational\AbstractFactory\WinFactory\WinFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanContain()
    {
        $winFactory = new WinFactory();
        $macFactory = new MacFactory();
        $app = new Application($macFactory);
//        $this->assertContainsEquals('button in macOS',$app->createUi());
        $this->assertStringContainsString('button in macOS',$app->createUi());
    }
}