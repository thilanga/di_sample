<?php

namespace Sample\Services;

use Sample\Contracts\IMusicService;
use Sample\Contracts\ITrack;

class NoMusicService implements IMusicService
{
    const SERVICE_NAME = 'No Service';
    private $track;

    public function getName(): string
    {
        return self::SERVICE_NAME;
    }

    public function fetchPlayList()
    {
        // TODO: Implement fetchPlayList() method.
    }

    /**
     * @return \Sample\Contracts\ITrack
     */
    public function fetchTrack(): ITrack
    {
        $this->auth();
        $this->track = new NoTrack();

        return $this->track;
    }

    private function auth()
    {
    }

}