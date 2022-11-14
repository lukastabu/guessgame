<?php

namespace App\Interfaces;

interface GameInterface
{
    public function addPlayer(PlayerInterface $player);

    public function makeTurn();
}