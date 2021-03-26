<?php

namespace App\Models;

use App\Models\Weapon;

class Rock implements Weapon
{
    private const ROCK = 'Rock';

    public function getName(): string
    {
        return self::ROCK;
    }
}