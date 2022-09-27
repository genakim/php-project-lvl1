<?php

declare(strict_types=1);

namespace BrainGames\Games\Progression;

const GAME_RULE = 'What number is missing in the progression?';

const MIN_LEN = 5;
const MAX_LEN = 10;

const MIN_STEP = 2;
const MAX_STEP = 5;

const MIN_START_POSITION = 0;
const MAX_START_POSITION = 100;

function start(): \Closure
{
    return fn() => progression();
}

function progression(): array
{
    $progression = [];
    $len = rand(MIN_LEN, MAX_LEN);
    $step = rand(MIN_STEP, MAX_STEP);
    $start = rand(MIN_START_POSITION, MAX_START_POSITION);

    $lastValue = $start;

    while ($len--) {
        $currentValue = $lastValue + $step;
        $progression[] = $lastValue = $currentValue;
    }

    $randomKey = array_rand($progression);
    $answer = $progression[$randomKey];
    $progression[$randomKey] = '..';
    $question = implode(' ', $progression);

    return [$question, $answer];
}
