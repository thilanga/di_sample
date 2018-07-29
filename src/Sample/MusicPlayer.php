<?php

namespace Sample;

use Sample\Contracts\IMusicService;

class MusicPlayer
{
    private $musicService;

    public function __construct(IMusicService $musicService)
    {
        $this->musicService = $musicService;
    }

    public function greet()
    {
        return $this->musicService->hello();
    }
}