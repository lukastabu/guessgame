<?php

namespace App\Player;

use App\Game\GameState;

class DrunkPlayer implements PlayerInterface
{
    public function guessLetter(GameState $state): string
    {
        static $previousLetter;
        // TODO: Implement guessLetter() method.
       do {
           $abc = "abcdefghijklmnopqrstvwxyuz";
           $int = random_int(0, strlen($abc) - 1);
           $letter = $abc[$int];
       } while ($previousLetter === $letter);

       $previousLetter = $letter;

       return $letter;
    }
}