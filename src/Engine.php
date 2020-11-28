<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function runGame($rule, $questionsAndAnswers)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($rule);

    foreach ($questionsAndAnswers as $questionAnswer) {
        ['question' => $question, 'correctAnswer' => $correctAnswer] = $questionAnswer;
        line("Question: %s", $question);
        $answer = prompt('Your answer');

        if ($answer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }

    line("You Win!");
}
