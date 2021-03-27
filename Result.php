<?php
require_once 'vendor/autoload.php';

use App\Players\Human;
use App\Players\Computer;
use App\Game;

$game = new Game();
$human = new Human();
$computer = new Computer();
$game->getWinner($human, $computer);
$game->showWinner();

