<?php

namespace App\Tests\Unit\Player;

use App\Game\GameState;
use DrunkPlayerTest;
use PHPUnit\Framework\TestCase;

class DrunkPlayerTest extends TestCase
{
    public function testHasLetter()
    {
        $state = $this->createMock(GameState::class);
        $player = new DrunkPlayer();
        $letter = $player->guessLetter($state);


        $this->assertIsString($letter);
        $this->assertEquals(1, strlen($letter));
    }
}
