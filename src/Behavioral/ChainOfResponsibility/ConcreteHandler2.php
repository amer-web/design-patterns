<?php


namespace App\Behavioral\ChainOfResponsibility;


class ConcreteHandler2 extends Handler
{
    public function handle($request)
    {
        if ($request == 'request2'){
            return 'handle by ConcreteHandler2';
        } else {
            return parent::handle($request);
        }
    }
}