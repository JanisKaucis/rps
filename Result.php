<?php
require_once 'vendor/autoload.php';

use App\Human;
use App\Computer;
use App\Game;

$game = new Game();
$human = new Human();
$computer = new Computer();
$game->getWinner($human, $computer);
$game->showWinner();

