<?php

namespace Sample;

use Sample\Contracts\IMusicService;
use Sample\Contracts\ITrack;

class MusicPlayer
{
    private $musicService;

    public function __construct(IMusicService $musicService)
    {
        $this->musicService = $musicService;
    }

    public function play()
    {
        /** @var ITrack $track */
        $track = $this->musicService->fetchTrack();
        $track->play();
    }
}