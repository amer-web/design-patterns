<?php


namespace App\Creational\Builder;


class ComputerSystem
{
    private $cpu;
    private $ram;
    private $storage;
    private $peripherals = [];

    public function __construct(CPU $cpu, RAM $ram, Storage $storage)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->storage = $storage;
    }

    public function addPeripheral(Peripheral $peripheral)
    {
        $this->peripherals[] = $peripheral;
    }

}