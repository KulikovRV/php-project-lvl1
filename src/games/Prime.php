<?php

namespace Brain\Games\Prime;

use function cli\line;

function printRulesPrime()
{
    return line('Answer "yes" if given number is prime. Otherwise answer "no".');
}

function addQuestionPrime()
{
    return rand(1, 99);
}

function calculateCorrectAnswerPrime($question)
{
    if ($question < 2) {
        return 'no';
    }

    for ($i = 2; $i <= $question / 2; $i++) {
        if ($question % $i == 0) {
            return 'no';
        }
    }
    return 'yes';
}
