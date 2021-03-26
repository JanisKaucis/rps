<?php

namespace App\Models;

use App\Models\Weapon;

class Paper implements Weapon
{
    private const PAPER = 'Paper';

    public function getName(): string
    {
        return self::PAPER;
    }
}