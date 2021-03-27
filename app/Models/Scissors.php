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
            return 'tie';
        }elseif ($opponent === 'Paper'){
            return 'win';
        }else{
            return 'lose';
        }
    }
}