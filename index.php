<?php
require __DIR__ . '/vendor/autoload.php';

use Sample\MusicPlayer;
use Sample\Services\GoogleMusic;

$googleMusic = new GoogleMusic();
$musicPlayer = new MusicPlayer((new GoogleMusic()));

echo $musicPlayer->greet();