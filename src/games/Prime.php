<?php

namespace Brain\Games\Prime;

use function Brain\Engine\play;

const GAME_DEF = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run()
{
    $logic = function () {
        $num = rand(1, 99);
        $question = "{$num}";
        $correctAnswer = (gmp_prob_prime($num) == 2) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    play(GAME_DEF, $logic);
}
