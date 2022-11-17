<?php

namespace App\Tests\Unit\Player;

use App\Game\GameState;
use App\Player\DrunkPlayer;
use PHPUnit\Framework\TestCase;

class DrunkPlayerTest extends TestCase
{
    public function testHasLetter()
    {
        $state = $this->createMock(GameState::class);
        $player = new DrunkPlayer();
        $letter = $player->guessLetter($state);
        $this->assertIsString($letter);
        $this->assertSame(strlen($letter), 1);

        $letter2 = $player->guessLetter($state);
        $this->assertNotSame($letter, $letter2);
    }
}
