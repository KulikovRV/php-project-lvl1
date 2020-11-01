<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Even\printRulesEven;
use function Brain\Games\Even\addQuestionEven;
use function Brain\Games\Even\calculateCorrectAnswerEven;

function runGame($game)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $winStreak = 0;
    switch ($game) {
        case 'brain-even':
            printRulesEven();
            while ($winStreak < 3) {
                $question = addQuestionEven();
                $correctAnswer = calculateCorrectAnswerEven($question);
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
    }
    return line("Congratulations, %s!", $name);


    /*while ($winStreak < 3) {
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
    return line("Congratulations, %s!", $name);*/
}
