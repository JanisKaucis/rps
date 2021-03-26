<?php

namespace Tests;

use App\Game;
use App\Human;
use App\Computer;
use App\Models\Paper;
use App\Models\Rock;
use App\Models\Scissors;
use App\Models\WeaponsCollection;
use PHPUnit\Framework\TestCase;

class RpsTest extends TestCase
{
    public function testArrayValues(): void
    {
        $weapons = new WeaponsCollection([new Paper(),new Rock(),new Scissors()]);
        foreach ($weapons->getWeaponsArray() as $weapon){
            $this->assertContains($weapon->getName(),['Rock', 'Paper', 'Scissors']);
        }

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