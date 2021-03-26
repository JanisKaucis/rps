<?php
namespace App\Models;

class WeaponsCollection
{
    private array $weaponsArray = [];

    public function __construct($weapon)
    {
        $this->weaponsArray = $weapon;
    }
    public function getWeaponsArray(): array
    {
        return $this->weaponsArray;
    }
}