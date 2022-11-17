<?php

namespace App\Tests\Unit\Game;

use App\Game\LuckyGame;
use PHPUnit\Framework\TestCase;

class LuckyGameTest extends TestCase
{
    public function testEmptyRound()
    {
        $game = new LuckyGame();
        $game->makeTurn();
        $this->assertEquals($game->isFinished());
    }
}
