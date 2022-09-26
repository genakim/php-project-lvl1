<?php

declare(strict_types=1);

namespace BrainGames\Games\Gcd;

const GAME_RULE = 'Find the greatest common divisor of given numbers.';
const MIN_NUM = 1;
const MAX_NUM = 100;

function start(): \Closure
{
    return fn() => gcd();
}

function gcd(): array
{
    $a = rand(MIN_NUM, MAX_NUM);
    $b = rand(MIN_NUM, MAX_NUM);

    $question = "$a $b";
    $gcd = 1;

    while ($remainder = $a % $b) {
        $a = $b;
        $b = $gcd = $remainder;
    }

    return [$question, $gcd];
}
