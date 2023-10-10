<?php

class Album
{
    public ?int $id = null;
    public ?string $name = null;
    public ?string $author = null;
    public ?int $year = 0;

    public function save()
    {
        if ($this->id !== null) {
            update($this->id, $this);
        } else {
            $this->id = insert($this);
        }
    }
}