<?php

namespace App;

use App\Models\Paper;
use App\Models\Rock;
use App\Models\Scissors;
use App\Models\WeaponsCollection;

class Computer implements RpsPlayer
{
    private object $weapons;
    private array $pcChoiceArray = [];
    private string $pcChoice;

    public function __construct()
    {
        $this->weapons = new WeaponsCollection([new Paper(), new Rock(), new Scissors()]);
        $this->setPcChoiceArray();
    }

    public function setPcChoiceArray(): void
    {
        foreach ($this->weapons->getWeaponsArray() as $weapon) {
            $this->pcChoiceArray[] = $weapon->getName();
        }
    }

    public function setChoice(): void
    {
        $pcArrayKey = array_rand($this->pcChoiceArray);
        $this->pcChoice = $this->pcChoiceArray[$pcArrayKey];
    }

    public function getChoice(): string
    {
        return $this->pcChoice;
    }
}