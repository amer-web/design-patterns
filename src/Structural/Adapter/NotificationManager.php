<?php


namespace App\Structural\Adapter;


class NotificationManager
{
    private NotificationInterface $notification;

    public function __construct(NotificationInterface $notification)
    {
        $this->notification = $notification;
    }

    public function sendNotification($data)
    {
        $this->notification->setData($data);
        return $this->notification->sendNotification();
    }
}