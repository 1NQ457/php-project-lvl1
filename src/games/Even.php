<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;
use function Brain\Engine\play;

const GAME_DEF = 'Answer "yes" if the number is even, otherwise answer "no".';

function run()
{
    $logic = function () {
        $question = rand(1, 99);
        $correctAnswer = ($question % 2 == 0) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    play(GAME_DEF, $logic);
}
