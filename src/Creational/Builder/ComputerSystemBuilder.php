<?php


namespace App\Creational\Builder;


class ComputerSystemBuilder
{
    private $cpu;
    private $ram;
    private $storage;
    private $peripherals = [];

    public function setCPU($model)
    {
        $this->cpu = new CPU($model);
        return $this;
    }

    public function setRAM($size)
    {
        $this->ram = new RAM($size);
        return $this;
    }

    public function setStorage($type, $capacity)
    {
        $this->storage = new Storage($type, $capacity);
        return $this;
    }

    public function addPeripheral($type)
    {
        $this->peripherals[] = new Peripheral($type);
        return $this;
    }

    public function build()
    {
        $computerSystem = new ComputerSystem($this->cpu, $this->ram, $this->storage);
        foreach ($this->peripherals as $peripheral) {
            $computerSystem->addPeripheral($peripheral);
        }
        return $computerSystem;
    }

}