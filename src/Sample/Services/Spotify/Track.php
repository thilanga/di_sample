<?php

namespace Sample\Services\Spotify;

use Sample\Contracts\ITrack;

class Track implements ITrack
{
    public function getName(): string
    {
        // TODO: Implement getName() method.
    }

    public function getArtist(): string
    {
        // TODO: Implement getArtist() method.
    }

    public function getTrackPath(): string
    {
        // TODO: Implement getTrackPath() method.
    }

    public function play()
    {
        echo 'Spotify: Track name goes here!';
    }
}