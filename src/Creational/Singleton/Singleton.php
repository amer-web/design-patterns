<?php


namespace App\Creational\Singleton;


class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct(){}

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
    /**
     * prevent the instance from being cloned
     */
    private function __clone()
    {
    }
}