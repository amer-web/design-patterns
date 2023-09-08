<?php


namespace App\Behavioral\State;


abstract class State
{
    private Order $order;

    public function setOrder(Order $order)
    {
        $this->order = $order;
    }

    abstract public function proceed();

    protected function transitionTo(State $state)
    {
        $this->getOrder()->setState($state);
    }


    public function getOrder()
    {
        return $this->order;
    }


}