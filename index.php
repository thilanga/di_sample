<?php
require __DIR__ . '/vendor/autoload.php';

use Sample\Contracts\IMusicService;
use Sample\MusicPlayer;
use Sample\Services\Google\GoogleMusic;
use Sample\Services\Spotify\SpotifyMusic;

// Create new IoC Container instance
$container = new Illuminate\Container\Container;

$container->singleton(IMusicService::class, function ($app) {
    switch (strtolower($_GET['user'])) {
        case 'thilanga':
            return new GoogleMusic();
        case 'pittado':
            return new SpotifyMusic();
        default:
            throw new Exception('No Music service been configured for this user');
    }
});

$musicPlayer = new MusicPlayer($container->make(IMusicService::class));
$musicPlayer->play();