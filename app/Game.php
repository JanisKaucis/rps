<?php

namespace App;

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
        $human->setChoice();
        $this->choice = $human->getChoice();
        $computer->setChoice();
        $this->pcChoice = $computer->getChoice();
        if (($this->choice === 'Rock' && $this->pcChoice === 'Scissors') ||
            ($this->choice === 'Paper' && $this->pcChoice === 'Rock') ||
            ($this->choice === 'Scissors' && $this->pcChoice === 'Paper')) {
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