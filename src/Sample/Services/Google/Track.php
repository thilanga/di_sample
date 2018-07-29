<?php

namespace Sample\Services\Google;

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
        echo 'Google Music: Track name goes here!';
    }
}