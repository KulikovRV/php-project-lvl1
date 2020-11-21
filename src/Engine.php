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

    $countOfQuestions = count($questionsAndAnswers[0]);
    $nestedArrayIndex = 0;
    while ($countOfQuestions > 0) {
        $question = $questionsAndAnswers[0][$nestedArrayIndex];
        $correctAnswer = $questionsAndAnswers[1][$nestedArrayIndex];
        line("Question: %s", $question);
        $answer = prompt('Your answer');

        if ($answer != $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
        $countOfQuestions--;
        $nestedArrayIndex++;
    }

    line("You Win!");
}
