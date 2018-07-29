<?php


namespace Sample\Contracts;


interface ITrack
{
    public function getName(): string;

    public function getArtist(): string;

    public function getTrackPath(): string;

    public function play();
}