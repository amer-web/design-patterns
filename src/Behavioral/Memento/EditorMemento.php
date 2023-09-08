<?php


namespace App\Behavioral\Memento;


class EditorMemento implements Memento
{
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }
    public function getContent()
    {
        return $this->content;
    }
}