<?php


namespace App\Behavioral\State;


class Order
{
    private State $state;

    public function __construct()
    {
        $this->state = new CreatedState();
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function orderProceed()
    {
        $this->state->setOrder($this);
        return $this->state->proceed();
    }


}