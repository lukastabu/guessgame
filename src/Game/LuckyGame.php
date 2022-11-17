<?php

namespace App\Game;

use App\Player\Player;
use App\Player\PlayerInterface;

class LuckyGame implements GameInterface
{
    private array $players;
    private ?State $state = null;

    public function __construct(State $state = null)
    {
        $this->state = $state ?? new State();
    }

    public function addPlayer(PlayerInterface $player)
    {
        $this->players[] = $player;
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