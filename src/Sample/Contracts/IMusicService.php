<?php


namespace Sample\Contracts;


interface IMusicService
{
    public function auth();

    public function fetchPlayList();

    public function fetchTrack();
}