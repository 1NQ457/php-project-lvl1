<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function greeting()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    return $name;
}

function isEven($num)
{
    return ($num % 2 == 0) ? 'yes' : 'no';
}

function run()
{
    $name = greeting();

    for ($correctAnswers = 0; $correctAnswers < 3; $correctAnswers++) {
        $num = rand(1, 99);
        $correctAnswer = isEven($num);

        line("Question: %s", $num);
        $answer = prompt('Your answer:');

        if ($answer === $correctAnswer) {
            line('Correct!');
            continue;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            exit(0);
        }
    }

    line("Congratulations, %s!", $name);
}
