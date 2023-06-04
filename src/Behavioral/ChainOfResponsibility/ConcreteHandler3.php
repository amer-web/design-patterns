<?php


namespace App\Behavioral\ChainOfResponsibility;


class ConcreteHandler3 extends Handler
{
    public function handle($request)
    {
        if ($request == 'request3') {
            return 'handle by ConcreteHandler3';
        } else {
            return 'your request is not found';
        }
    }
}