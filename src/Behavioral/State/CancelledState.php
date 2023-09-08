<?php


namespace App\Behavioral\State;


class CancelledState extends State
{

    public function proceed()
    {
        echo 'you order is cancelled successful';
    }

}