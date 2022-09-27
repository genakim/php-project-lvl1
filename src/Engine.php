<?php

declare(strict_types=1);

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function startGame(callable $game, string $gameRule): void
{
    $rounds = ROUNDS;

    line('Welcome to the Brain Game!');
    $playerName = prompt('May I have your name?');
    line('Hello, %s!', $playerName);
    line($gameRule);

    while ($rounds--) {
        [$question, $correctAnswer] = $game();

        line("Question: $question");
        $playerAnswer = prompt("Your answer");

        if ($correctAnswer == $playerAnswer) {
            line('Correct!');
        } else {
            line("'$playerAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, $playerName!");
            return;
        }
    }

    line("Congratulations, $playerName!");
}
