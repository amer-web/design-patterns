<?php


namespace App\Behavioral\ChainOfResponsibility;


class ConcreteHandler1 extends Handler
{

    public function handle($request)
    {
        if ($request == 'request1') {
            return 'handle by ConcreteHandler1';
        } else {
            // all these ways are true
            return $this->getNextHandler()->handle($request);
//            return $this->nextHandler->handle($request);
//            return parent::handle($request);
        }
    }
}