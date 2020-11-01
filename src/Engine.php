<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Even\printRules;
use function Brain\Games\Even\addQuestion;
use function Brain\Games\Even\calculateCorrectAnswer;

function runGame()
{

    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    printRules();

    $winStreak = 0;
    while ($winStreak < 3) {
        $question = addQuestion();
        $correctAnswer = calculateCorrectAnswer($question);
        line("Question: %s", $question);
        $answer = prompt('Your answer');
        if ($answer === $correctAnswer) {
            line('Correct!');
            $winStreak++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return line("Let's try again, %s!", $name);
        }
    }
    return line("Congratulations, %s!", $name);
}
