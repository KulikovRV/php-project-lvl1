<?php

namespace Brain\Games\Even;

use function cli\line;

function printRulesEven()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
}

function addQuestionEven()
{
    return rand(1, 99);
}

function calculateCorrectAnswerEven($question)
{
    return $question % 2 === 0 ? 'yes' : 'no';
}
