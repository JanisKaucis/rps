<?php
namespace App\Models;

interface Weapon
{
    public function getName(): string;
    public function isWinning($opponent): string;
}