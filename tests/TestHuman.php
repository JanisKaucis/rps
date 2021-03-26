<?php

namespace Tests;

use App\Human;
use PHPUnit\Framework\TestCase;

class TestHuman extends TestCase
{
    public function testHuman(): void
    {
        $human = new Human();
        $human->setChoice();
        $this->assertEquals('Paper', $human->getChoice());
    }
}
