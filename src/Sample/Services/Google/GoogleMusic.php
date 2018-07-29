<?php


namespace Sample\Services\Google;


use Sample\Contracts\IMusicService;
use Sample\Contracts\ITrack;

class GoogleMusic implements IMusicService
{
    private $track;

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