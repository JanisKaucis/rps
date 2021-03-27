<?php

namespace App\Models;

class Scissors implements Weapon
{
    private const SCISSORS = 'Scissors';

    public function getName(): string
    {
        return self::SCISSORS;
    }
    public function isWinning($opponent): string
    {
        if ($opponent === 'Scissors'){
            return 'win';
        }elseif ($opponent === 'Paper'){
            return 'lose';
        }else{
            return 'tie';
        }
    }
}