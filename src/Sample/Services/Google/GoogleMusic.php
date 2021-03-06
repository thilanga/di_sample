<?php

namespace Sample\Services\Google;

use Sample\Contracts\IMusicService;
use Sample\Contracts\ITrack;

class GoogleMusic implements IMusicService
{
    const SERVICE_NAME = 'Google';
    private $track;

    public function getName(): string
    {
        // TODO: Implement getName() method.
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
        $this->track = new Track();

        return $this->track;
    }

    private function auth()
    {
    }

}