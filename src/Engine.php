<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Even\printRulesEven;
use function Brain\Games\Even\addQuestionEven;
use function Brain\Games\Even\calculateCorrectAnswerEven;
use function Brain\Games\Calc\printRulesCalc;
use function Brain\Games\Calc\addQuestionCalc;
use function Brain\Games\Calc\calculateCorrectAnswerCalc;
use function Brain\Games\Gcd\printRulesGcd;
use function Brain\Games\Gcd\addQuestionGcd;
use function Brain\Games\Gcd\calculateCorrectAnswerGcd;
use function Brain\Games\Progression\printRulesProgression;
use function Brain\Games\Progression\addQuestionProgression;
use function Brain\Games\Progression\calculateCorrectAnswerProgression;
use function Brain\Games\Prime\printRulesPrime;
use function Brain\Games\Prime\addQuestionPrime;
use function Brain\Games\Prime\calculateCorrectAnswerPrime;

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
                if ($answer == $correctAnswer) {
                    line('Correct!');
                    $winStreak++;
                } else {
                    line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
                    return line("Let's try again, %s!", $name);
                }
            }
            // no break
        case 'brain-calc':
            printRulesCalc();
            while ($winStreak < 3) {
                $question = addQuestionCalc();
                $correctAnswer = calculateCorrectAnswerCalc($question);
                line("Question: %s", $question);
                $answer = prompt('Your answer');
                if ($answer == $correctAnswer) {
                    line('Correct!');
                    $winStreak++;
                } else {
                    line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
                    return line("Let's try again, %s!", $name);
                }
            }
            // no break
        case 'brain-gcd':
            printRulesGcd();
            while ($winStreak < 3) {
                $question = addQuestionGcd();
                $correctAnswer = calculateCorrectAnswerGcd($question);
                line("Question: %s", $question);
                $answer = prompt('Your answer');
                if ($answer == $correctAnswer) {
                    line('Correct!');
                    $winStreak++;
                } else {
                    line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
                    return line("Let's try again, %s!", $name);
                }
            }
            // no break
        case 'brain-progression':
            printRulesProgression();
            while ($winStreak < 3) {
                $question = addQuestionProgression();
                $correctAnswer = calculateCorrectAnswerProgression($question);
                line("Question: %s", $question);
                $answer = prompt('Your answer');
                if ($answer == $correctAnswer) {
                    line('Correct!');
                    $winStreak++;
                } else {
                    line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
                    return line("Let's try again, %s!", $name);
                }
            }
            // no break
        case 'brain-prime':
            printRulesPrime();
            while ($winStreak < 3) {
                $question = addQuestionPrime();
                $correctAnswer = calculateCorrectAnswerPrime($question);
                line("Question: %s", $question);
                $answer = prompt('Your answer');
                if ($answer == $correctAnswer) {
                    line('Correct!');
                    $winStreak++;
                } else {
                    line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
                    return line("Let's try again, %s!", $name);
                }
            }
            // no break
    }
     line("Congratulations, %s!", $name);
}
