<?php

declare(strict_types=1);

namespace BrainGames\Games\IsEven;

const GAME_RULE = 'Answer "yes" if the number is even, otherwise answer "no".';
const MIN_NUM = 1;
const MAX_NUM = 100;

function game(): \Closure
{
    return fn() => start();
}

function start(): array
{
    $num = rand(MIN_NUM, MAX_NUM);
    $isEven = $num % 2 === 0;
    $correctAnswer = $isEven ? 'yes' : 'no';

    return [$num, $correctAnswer];
}
