<?php


namespace Sample\Contracts;


interface Track
{
    public function getName(): string;

    public function getArtist(): string;

    public function getTrackPath(): string;
}