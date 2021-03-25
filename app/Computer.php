<?php

namespace App;

use App\Models\ValidOptionsArray;

class Computer implements RpsPlayer
{
    private object $option;
    private array $pcChoiceArray;
    private string $pcChoice;

    public function __construct()
    {
        $this->option = new ValidOptionsArray();
        $this->option->setValidOptions();
        $this->pcChoiceArray = $this->option->getValidOptions();
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