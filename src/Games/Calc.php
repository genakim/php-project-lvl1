<?php

declare(strict_types=1);

namespace BrainGames\Games\Calc;

const GAME_RULE = 'What is the result of the expression?';
const OPERATIONS = ['+', '-', '*'];
const MIN_NUM = 1;
const MAX_NUM = 30;

function start(): \Closure
{
    return fn() => calc();
}

function calc(): array
{
    $a = rand(MIN_NUM, MAX_NUM);
    $b = rand(MIN_NUM, MAX_NUM);
    $operation = OPERATIONS[array_rand(OPERATIONS)];

    $question = "$a $operation $b";

    $correctAnswer = match ($operation) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b,
    };

    return [$question, $correctAnswer];
}
