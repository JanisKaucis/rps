<?php

namespace App;

interface RpsPlayer
{
    public function setChoice(): void;

    public function getChoice(): string;
}