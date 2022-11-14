<?php

namespace App\States;

class GameState
{
    private string $secret;
    private array $maskedWord;

    public function setMaskedWord($secret): array
    {
        $secretWordLetterArray = str_split($secret);
        foreach ($secretWordLetterArray as $item) {
            $maskedWord[] = '_';
        }
        return $maskedWord;
    }

    /**
     * @return array
     */
    public function getMaskedWord(): array
    {
        return $this->maskedWord;
    }
}