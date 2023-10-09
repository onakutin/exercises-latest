<?php
class Author
{
    public ?string $name = null;
    public ?int $year_of_birth = null;
    public ?string $genre = null;
    public ?array $bands = [];
    public ?array $songs = [];
    public ?array $albums = [];

    public function findBands(): array
    {

    }
    public function listSongs(): array
    {

    }
}