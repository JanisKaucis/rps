<?php

namespace App;

use App\Models\Paper;
use App\Models\Rock;
use App\Models\Scissors;
use App\Models\WeaponsCollection;
use App\Players\Human;
use App\Players\Computer;

class Game
{
    private string $choice;
    private string $pcChoice;
    private string $winner;

    public function setGame(): void
    {
        require_once 'app/Views/GameView.php';
    }

    public function getWinner(Human $human, Computer $computer): void
    {
        $weaponCollection = new WeaponsCollection([new Paper(), new Rock(), new Scissors()]);
        $human->setChoice();
        $this->choice = $human->getChoice();
        $computer->setChoice();
        $this->pcChoice = $computer->getChoice();
        foreach ($weaponCollection->getWeaponsArray() as $weapon){
            if ($weapon->getName() === $this->choice){
                $this->winner = $weapon->isWinning($this->pcChoice);
            }
        }
    }

    public function showWinner(): void
    {
        $choice = $this->choice;
        $pcChoice = $this->pcChoice;
        $value = $this->winner;
        require_once 'app/Views/WinnerView.php';
    }

    public function winner(): int
    {
        return $this->winner;
    }
}