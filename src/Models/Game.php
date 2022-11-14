<?php

namespace App\Models;

use App\Interfaces\GameInterface;
use App\Interfaces\PlayerInterface;

class Game implements GameInterface
{

    public function addPlayer(PlayerInterface $player)
    {
        return new Player();
    }

    public function makeTurn()
    {
        // TODO: Implement makeTurn() method.
    }

    public function isFinished()
    {
        // TODO: Implement isFinished() method.
    }
}