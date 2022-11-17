<?php

namespace App\Player;

use App\Game\GameState;

interface PlayerInterface
{
    public function guessLetter(GameState $state): string;
}