<?php

namespace Tests;

use App\Computer;
use PHPUnit\Framework\TestCase;

class TestComputer extends TestCase
{
    public function testComputer(): void
    {
        $computer = new Computer();
        $computer->setChoice();
        $this->assertContains($computer->getChoice(), ['Rock', 'Paper', 'Scissors']);
    }
}