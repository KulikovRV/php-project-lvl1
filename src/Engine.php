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

    $countOfRound = count($questionsAndAnswers);
    $currentRound = 0;

    while ($currentRound < $countOfRound) {
        $currentQA = $questionsAndAnswers[$currentRound];
        $question = $currentQA['question'];
        $correctAnswer = $currentQA['correctAnswer'];
        line("Question: %s", $question);
        $answer = prompt('Your answer');

        if ($answer != $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
        $currentRound++;
    }

    line("You Win!");
}
