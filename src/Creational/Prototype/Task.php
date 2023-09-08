<?php


namespace App\Creational\Prototype;


class Task
{
    private $title;
    private $description;
    private $dueDate;

    public function __construct($title, $description, $dueDate)
    {
        $this->title = $title;
        $this->description = $description;
        $this->dueDate = $dueDate;
    }

    public function __clone(): void
    {
        $this->dueDate = null;
    }

    public function getInfo()
    {
        $info = "Title: {$this->title}, Description: {$this->description}, Due Date: ";
        if ($this->dueDate) {
            $info .= $this->dueDate->format('Y-m-d');
        } else {
            $info .= 'Not set';
        }
        return $info;

    }

}