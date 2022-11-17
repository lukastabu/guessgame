<?php

namespace App\Game;

class GameState
{
    private const MASKED_SYMBOL = '_';

    public function __construct(
        private array $secret,
        private array $maskedWord = []
        )
    {
    }

    public function fromWord(string $word): GameState
    {
        $secret = str_split($word);

        return new self(
            $secret,
            array_fill(0, count($secret), self::MASKED_SYMBOL)
        );
    }

    public function getSecret(): array
    {
        return $this->secret;
    }

    public function getMaskedWord(): array
    {
        return $this->maskedWord;
    }

    public function isFinished(): bool
    {
        return $this->getMaskedWord() === $this->getMaskedWord();
    }
}