<?php

namespace App\Models;

class Scissors implements Weapon
{
    private const SCISSORS = 'Scissors';

    public function getName(): string
    {
        return self::SCISSORS;
    }
}