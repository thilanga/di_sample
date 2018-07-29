<?php
require __DIR__ . '/vendor/autoload.php';

use Sample\MusicPlayer;
use Sample\Services\Google\GoogleMusic;

$musicService = new GoogleMusic();
$musicPlayer = new MusicPlayer($musicService);

$musicPlayer->play();