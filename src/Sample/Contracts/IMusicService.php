<?php

namespace Sample\Contracts;

interface IMusicService
{
    public function getName(): string;

    public function fetchPlayList();

    public function fetchTrack();
}