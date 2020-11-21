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
        if ($answer == $correctAnswer) {
            line('Correct!');
            $countOfQuestions--;
            $nestedArrayIndex++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return line("Let's try again, %s!", $name);
        }
    }

    return print_r("You Win!\n");
}
