<?php


namespace App\Structural\Adapter;


interface NotificationInterface
{
    public function setData($data);
    public function sendNotification();
}