<?php


namespace App\Behavioral\State;


class CreatedState extends State
{

    public function proceed()
    {
        return 'you order is created successful';
//        $this->transitionTo(new CancelledState());
    }
}