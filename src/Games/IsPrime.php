<?php

declare(strict_types=1);

namespace BrainGames\Games\IsPrime;

const GAME_RULE = 'Answer "yes" if given number is prime. Otherwise answer "no".';

const MIN_NUM = 1;
const MAX_NUM = 500;
const PRIME_NUMBER_START_POSITION = 2;

function start(): \Closure
{
    return fn() => isPrime();
}

function isPrime(): array
{
    $num = rand(MIN_NUM, MAX_NUM);
    $isPrime = true;

    for ($i = PRIME_NUMBER_START_POSITION; $i < $num; $i++) {
        $hasDivisor = $num % $i === 0;

        if ($hasDivisor) {
            $isPrime = false;
            break;
        }
    }

    $answer = $isPrime ? 'yes' : 'no';

    return [$num, $answer];
}
