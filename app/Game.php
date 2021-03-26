<?php

namespace App;

use App\Models\Paper;
use App\Models\Rock;
use App\Models\Scissors;

class Game
{
    private string $choice;
    private string $pcChoice;
    private int $winner;

    public function setGame(): void
    {
        require_once 'app/Views/GameView.php';
    }

    public function getWinner(Human $human, Computer $computer): void
    {
        $paper = new Paper();
        $rock = new Rock();
        $scissors = new Scissors();
        $human->setChoice();
        $this->choice = $human->getChoice();
        $computer->setChoice();
        $this->pcChoice = $computer->getChoice();
        if (($this->choice === $rock->getName() && $this->pcChoice === $scissors->getName()) ||
            ($this->choice === $paper->getName() && $this->pcChoice === $rock->getName()) ||
            ($this->choice === $scissors->getName() && $this->pcChoice === $paper->getName())) {
            $this->winner = 1;
        } elseif ($this->choice === $this->pcChoice) {
            $this->winner = 3;
        } else {
            $this->winner = 2;
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