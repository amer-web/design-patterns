<?php


namespace App\Structural\Adapter;


use App\Structural\Adapter\TwitterNotifiction\Twitter;

class TwitterAdapter implements NotificationInterface
{
    private Twitter $twitter;

    public function __construct()
    {
        $this->twitter = new Twitter();
    }

    public function setData($data)
    {
        $this->twitter->setMessage($data);
    }

    public function sendNotification()
    {
        return $this->twitter->sendTweet();
    }
}