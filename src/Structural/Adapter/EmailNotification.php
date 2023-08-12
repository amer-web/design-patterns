<?php


namespace App\Structural\Adapter;


class EmailNotification implements NotificationInterface
{
    private $data;
    public function setData($data)
    {
        $this->data = $data;
    }

    public function sendNotification()
    {
        return $this->data . ' by email';
    }
}