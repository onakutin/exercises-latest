<?php
class Album
{
    public ?string $title = null;
    public ?string $interpret = null;
    public ?int $release_year = null;
    public ?int $duration = null;
    public ?string $genre = null;

    public function play(): void
    {
    }

    public function add_to_playlist(): void
    {
    }
}