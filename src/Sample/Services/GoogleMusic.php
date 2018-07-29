<?php

namespace Sample\Services;


use Sample\Contracts\IMusicService;

class GoogleMusic implements IMusicService
{
    public function hello(): string
    {
        return 'I\'m Google Music. How are you doing today?';
    }

}