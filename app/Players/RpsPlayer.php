<?php

namespace App\Players;

interface RpsPlayer
{
    public function setChoice(): void;

    public function getChoice(): string;
}