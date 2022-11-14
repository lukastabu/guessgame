<?php

namespace App\Interfaces;

interface PlayerInterface
{
    public function guessLetter(State $state): string;
}