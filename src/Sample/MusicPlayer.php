<?php

namespace Sample;

use Exception;
use Sample\Contracts\IMusicService;
use Sample\Contracts\ITrack;
use Sample\Services\NoMusicService;

class MusicPlayer
{
    private $musicService;

    /**
     * MusicPlayer constructor.
     *
     * @param \Sample\Contracts\IMusicService $musicService
     *
     * @throws \Exception
     */
    public function __construct(IMusicService $musicService)
    {
        if ($musicService instanceof NoMusicService) {
            throw new Exception('No Music service been configured for this user');
        }

        $this->musicService = $musicService;
    }

    public function play()
    {
        /** @var ITrack $track */
        $track = $this->musicService->fetchTrack();
        $track->play();
    }
}