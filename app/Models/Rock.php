<?php

namespace App\Models;

class Rock implements Weapon
{
    private const ROCK = 'Rock';

    public function getName(): string
    {
        return self::ROCK;
    }
    public function isWinning($opponent): string
    {
        if ($opponent === 'Rock'){
            return 'tie';
        }elseif ($opponent === 'Scissors'){
            return 'win';
        }else{
            return 'lose';
        }
    }
}