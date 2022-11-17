<?php

namespace App\Player;

use App\Game\GameState;
use App\Interfaces\State;

class DrunkPlayer implements PlayerInterface
{
    public function guessLetter(GameState $state): string
    {
        // TODO: Implement guessLetter() method.
        $abc = "abcdefghijklmnopqrstxyuz";
        $int = random_int(0, strlen($abc)-1);
        return $abc[$int];
    }
}