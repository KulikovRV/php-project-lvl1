<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function runGame($rule, $questionAndAnswer)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($rule);

    $winStreak = 0;
    $countOfGameRounds = 3;
    $nestedArrayIndex = 0;
    while ($winStreak < $countOfGameRounds) {
        $question = $questionAndAnswer[0][$nestedArrayIndex];
        $correctAnswer = $questionAndAnswer[1][$nestedArrayIndex];
        line("Question: %s", $question);
        $answer = prompt('Your answer');
        if ($answer == $correctAnswer) {
            line('Correct!');
            $winStreak++;
            $nestedArrayIndex++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return line("Let's try again, %s!", $name);
        }
    }

    return print_r("You Win!\n");
}
