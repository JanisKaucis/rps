<?php
namespace App\Models;

use App\Models\Weapon;

class Scissors implements Weapon
{
    private const SCISSORS = 'Scissors';
    public function getName(): string
    {
        return self::SCISSORS;
    }
}