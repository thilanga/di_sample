<?php
require __DIR__ . '/vendor/autoload.php';

use Sample\MusicPlayer;
use Sample\Services\Google\GoogleMusic;
use Sample\Services\Spotify\SpotifyMusic;

// $musicService = new GoogleMusic();
$musicService = new SpotifyMusic();

$musicPlayer = new MusicPlayer($musicService);
$musicPlayer->play();