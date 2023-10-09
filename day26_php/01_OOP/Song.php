<?php

class Song extends AudioTrack
{
    // property that the AudioTrack does not have
    public $album = null;

    public function getAlbum()
    {
        // method that a common AudioTrack does not have
    }

    public function getAuthor(): Author
    {
        // specific implementation of getAuthor
        // which is different from a common AudioTrack
        if ($this->album) {
            // JS:   this.album.author
            return $this->album->author;
        } else {
            // use the parent's (AudioTrack's) implementation
            return parent::getAuthor();
        }
    }
}