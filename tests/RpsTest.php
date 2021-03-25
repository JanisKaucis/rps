<?php

namespace Tests;

use App\Game;
use App\Human;
use App\Computer;
use App\Models\ValidOptionsArray;
use PHPUnit\Framework\TestCase;

class RpsTest extends TestCase
{
    public function testArrayValues(): void
    {
        $optionsArray = new ValidOptionsArray();
        $optionsArray->setValidOptions();
        $this->assertEquals(['Rock', 'Paper', 'Scissors'], $optionsArray->getValidOptions());
    }

    public function testWinner(): void
    {
        $game = new Game();
        $human = new Human();
        $computer = new Computer();
        $game->getWinner($human, $computer);
        $this->assertContains($game->winner(), [1, 2, 3]);
    }
    public function testHuman():void
    {
        $human = new Human();
        $human->setChoice();
        $this->assertEquals('Paper',$human->getChoice());
    }
    public function testComputer(): void
    {
        $computer = new Computer();
        $computer->setChoice();
        $this->assertContains($computer->getChoice(),['Rock','Paper','Scissors']);
    }
}