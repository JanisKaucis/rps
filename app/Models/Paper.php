<?php

namespace App\Models;

class Paper implements Weapon
{
    private const PAPER = 'Paper';

    public function getName(): string
    {
        return self::PAPER;
    }
}