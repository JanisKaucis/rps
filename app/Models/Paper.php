<?php

namespace App\Models;

class Paper implements Weapon
{
    private const PAPER = 'Paper';

    public function getName(): string
    {
        return self::PAPER;
    }

    public function isWinning($opponent): string
    {

      if ($opponent === 'Paper'){
          return 'win';
      }elseif ($opponent === 'Rock'){
          return 'lose';
      }else{
          return 'tie';
      }
    }
}