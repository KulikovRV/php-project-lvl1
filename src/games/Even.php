<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function verificationEven()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $winStreak = 0;

    while ($winStreak < 3) {
        $randInt = rand(1, 99);
        line("Question: {$randInt}");
        $correctAnswer = $randInt % 2 === 0 ? 'yes' : 'no';
        $answer = prompt('Your answer');

        if ($answer === $correctAnswer) {
            line('Correct!');
            $winStreak++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return line("Let's try again, Bill!");
        }
    }
    return line("Congratulations, Sam!");
}
