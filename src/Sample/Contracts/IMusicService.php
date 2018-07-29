<?php


namespace Sample\Contracts;


interface IMusicService
{
    public function fetchPlayList();

    public function fetchTrack();
}