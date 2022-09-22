<?php

declare(strict_types=1);

namespace BrainGames\Game;

use function cli\line;
use function cli\prompt;

function greetings(): string
{
    line('Welcome to the Brain Game!');
    $player = prompt('May I have your name?');
    line('Hello, %s!', $player);

    return $player;
}

function checkIsEven(): void
{
    $rounds = 3;
    $minNum = 1;
    $maxNum = 100;

    $player = greetings();
    line('Answer "yes" if the number is even, otherwise answer "no".');

    while ($rounds--) {
        $num = random_int($minNum, $maxNum);
        $isEven = $num % 2 === 0;
        $correctAnswer = $isEven ? 'yes' : 'no';

        line("Question: $num");
        $playerAnswer = strtolower(prompt("Your answer"));

        $isCorrectAnswer = $correctAnswer === $playerAnswer;

        if ($isCorrectAnswer) {
            line('Correct!');
        } else {
            line("'$playerAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            return;
        }
    }

    line("Congratulations, $player!");
}
