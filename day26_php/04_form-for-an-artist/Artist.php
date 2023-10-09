<?php

class Artist
{
    public ?int $id = null;
    public ?string $first_name = null;
    public ?string $last_name = null;
    public ?int $year_of_birth = null;
    public ?string $genre = null;

    public function save()
    {
        if ($this->id !== null) {
            update($this->id, $this);
        } else {
            $this->id = insert($this);
        }
    }

    public function getDetails()
    {
        $this->first_name = $_POST['fName'] ?? $this->first_name;
        $this->last_name = $_POST['lName'] ?? $this->last_name;
        $this->year_of_birth = $_POST['birthYear'] ?? $this->year_of_birth;
        $this->genre = $_POST['genre'] ?? $this->genre;
    }

    public function renderForm()
    {
        echo
            '
        First name:<br>
        <input type="text" name="fName" value="' . htmlspecialchars((string) $this->first_name) . '"><br>
        <br>

        Last name:<br>
        <input type="text" name="lName" value="' . htmlspecialchars((string) $this->last_name) . '"><br>
        <br>

        Year of birth:<br>
        <input type="number" name="birthYear" value="' . htmlspecialchars((string) $this->year_of_birth) . '"><br>
        <br>

        Genre:<br>
        <input type="text" name="genre" value="' . htmlspecialchars((string) $this->genre) . '"><br>
        <br>

        <button type="submit">Save</button>';

    }

}