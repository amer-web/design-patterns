<?php


namespace App\Behavioral\ChainOfResponsibility;


abstract class Handler
{
    protected ?Handler $nextHandler;
    public function setNext(Handler $handler) {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle($request) {
        if ($this->nextHandler !== null) {
            return $this->nextHandler->handle($request);
        }
        return null;
    }

    /**
     * @return Handler|null
     */
    public function getNextHandler(): ?Handler
    {
        return $this->nextHandler;
    }

}