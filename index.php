<?php
require __DIR__ . '/vendor/autoload.php';

use Sample\Contracts\IMusicService;
use Sample\MusicPlayer;
use Sample\Services\Google\GoogleMusic;
use Sample\Services\NoMusicService;
use Sample\Services\Spotify\SpotifyMusic;

// Create new IoC Container instance
$container = new Illuminate\Container\Container;

$container->singleton(IMusicService::class, function ($app) {
    switch (strtolower($_GET['user'])) {
        case 'alice':
            return new GoogleMusic();
        case 'bob':
            return new SpotifyMusic();
        default:
            return new NoMusicService();
    }
});

try {
    $musicPlayer = new MusicPlayer($container->make(IMusicService::class));
    $musicPlayer->play();
} catch (Exception $e) {
    die('Can\t find a music service.');
}
