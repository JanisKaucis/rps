<?php

namespace App\Models;

class ValidOptionsArray
{
    private array $validOptions;

    public function setValidOptions(): void
    {
        $this->validOptions = ['Rock', 'Paper', 'Scissors'];
    }

    public function getValidOptions(): array
    {
        return $this->validOptions;
    }
}