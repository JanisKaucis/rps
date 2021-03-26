<?php

namespace Tests;

use App\Models\Paper;
use App\Models\Rock;
use App\Models\Scissors;
use App\Models\WeaponsCollection;
use PHPUnit\Framework\TestCase;

class TestWeaponCollection extends TestCase
{
    public function testArrayValues(): void
    {
        $weapons = new WeaponsCollection([new Paper(), new Rock(), new Scissors()]);
        foreach ($weapons->getWeaponsArray() as $weapon) {
            $this->assertContains($weapon->getName(), ['Rock', 'Paper', 'Scissors']);
        }

    }
}