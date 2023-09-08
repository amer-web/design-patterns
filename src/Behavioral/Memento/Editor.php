<?php


namespace App\Behavioral\Memento;


class Editor
{
    private string $content = '';


    public function type(string $words)
    {
        $this->content .= $words;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function save(): Memento
    {
        return new EditorMemento($this->getContent());
    }

    public function restore(Memento $memento)
    {
        $this->content = $memento->getContent();
    }
}