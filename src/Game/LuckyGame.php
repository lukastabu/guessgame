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
        $words = [];
        shuffle($words);
        $secret = $words[0];

        $this->state = $state ?? new State();
    }

    public function addPlayer(PlayerInterface $player)
    {
        $this->players[] = $player;
    }


    public function makeTurn()
    {
        // TODO: Implement makeTurn() method.
        foreach ($this->players as $player)
    }

    public function isFinished()
    {
        // TODO: Implement isFinished() method.
        return $this->state->isFinished();
    }
}