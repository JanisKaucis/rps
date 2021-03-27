<?php

namespace Tests;

use App\Game;
use App\Players\Human;
use App\Players\Computer;
use PHPUnit\Framework\TestCase;

class TestWinner extends TestCase
{
    public function testWinner(): void
    {
        $game = new Game();
        $human = new Human();
        $computer = new Computer();
        $game->getWinner($human, $computer);
        $this->assertContains($game->winner(), [1, 2, 3]);
    }
}