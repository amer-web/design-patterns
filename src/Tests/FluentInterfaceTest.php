<?php


namespace App\Tests;


use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase
{
    public function testBuildSQL()
    {
        $query = new \App\Structural\FluentInterface\QueryBuilder();
        $sql = $query->table('users')->select('name','id')
            ->where('age', '>', 18)
            ->where('country', '=', 'USA')
            ->getQuery();

        $this->assertSame('SELECT name, id FROM users WHERE age > 18 AND country = US', $sql);
    }
}