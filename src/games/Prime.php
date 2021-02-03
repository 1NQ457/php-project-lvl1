<?php

namespace Brain\Games\Prime;

use function Brain\Engine\play;

const GAME_DEF = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($num)
{
    for ($i = 2; $i <= sqrt($num); $i++) {
        if (!($num % $i)) {
            return false;
        }
    }
    return true;
}

function run()
{
    $logic = function () {
        $num = rand(1, 99);
        $question = $num;
        $correctAnswer = (isPrime($num)) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    play(GAME_DEF, $logic);
}
