<?php


namespace App\Tests;


use App\Structural\DI\DatabaseConfiguration;
use App\Structural\DI\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'amer', '1234');
        $connection = new DatabaseConnection($config);

        $this->assertSame('amer:1234@localhost:3306', $connection->getDsn());
    }
}