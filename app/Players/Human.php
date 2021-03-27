<?php

namespace App\Players;

class Human implements RpsPlayer
{
    private string $choice;

    public function setChoice(): void
    {
        if (isset($_POST['choice'])) {
            $this->choice = $_POST['choice'];
        } else {
            $this->choice = 'Paper';
        }
    }

    public function getChoice(): string
    {
        return $this->choice;
    }
}
