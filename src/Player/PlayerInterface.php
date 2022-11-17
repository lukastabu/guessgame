<?php

namespace App\Player;

use App\Interfaces\State;

interface PlayerInterface
{
    public function guessLetter(State $state): string;
}