<?php


namespace App\Structural\Adapter\TwitterNotifiction;


class Twitter
{
    private $message;
    public function setMessage($message)
    {
        $this->message = $message;
    }
    public function sendTweet()
    {
        return $this->message .' by twitter';
    }
}