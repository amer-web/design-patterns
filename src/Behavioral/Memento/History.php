<?php


namespace App\Behavioral\Memento;


class History
{
    private Editor $editor;
    private $mementos = [];
    public function __construct(Editor $editor)
    {
        $this->editor = $editor;
    }

    public function backup()
    {
        $this->mementos[] = $this->editor->save();
    }

    public function undo(): void
    {
        $m = array_pop($this->mementos);
        $this->editor->restore($m);
    }
}