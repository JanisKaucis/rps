<?php

namespace App\Models;

class Rock implements Weapon
{
    private const ROCK = 'Rock';

    public function getName(): string
    {
        return self::ROCK;
    }
}