<?php
require __DIR__ . '/vendor/autoload.php';

use Sample\MusicPlayer;
use Sample\Services\Google\GoogleMusic;

$googleMusic = new GoogleMusic();
$musicPlayer = new MusicPlayer((new GoogleMusic()));

$musicPlayer->play();