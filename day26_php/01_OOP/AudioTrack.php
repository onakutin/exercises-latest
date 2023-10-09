<?php

class AudioTrack
{
    // to get rid of the deprecation error when using DBBlackbox:
    public ?int $id = null;

    public ?string $name = null;
    public ?string $author_name = null;
    public int $length = 0;
    public ?int $year_of_release = null;
    public ?string $album_name = null;

    public function __construct(null|string $name = null)
    {
        $this->name = $name;
    }

    /**
     * save information about this audio track in the database
     */
    public function save(): void
    {
        if ($this->id !== null) {
            $this->update();
        } else {
            $this->save();
        }

    }

    /**
     * delete information about this audio track from the database
     */
    public function delete(): bool
    {
        return true;
    }

    /**
     * retrieve information about the author from the database
     */
    public function getAuthor(): Author|null
    {
        return new Author;
    }

    public function getLengthInMinutes(): int|float
    {
        // JS:  this.length
        return $this->length / 60;
    }
    public function insert()
    {
        $this->id = insert($this);
    }
    public function update()
    {
        update($this->id, $this);
    }
}

class Author
{

}