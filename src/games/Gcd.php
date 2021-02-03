<?php

namespace Brain\Games\Gcd;

use function Brain\Engine\play;

const GAME_DEF = 'Find the greatest common divisor of given numbers.';

function run()
{
    $logic = function () {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);
        $question = "{$num1} {$num2}";
        $correctAnswer = gmp_gcd($num1, $num2);

        return [$question, $correctAnswer];
    };

    play(GAME_DEF, $logic);
}
