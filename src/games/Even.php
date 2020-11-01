<?php

namespace Brain\Games\Even;

function printRules()
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function addQuestion()
{
    return rand(1, 99);
}

function calculateCorrectAnswer($question)
{
    return $question % 2 === 0 ? 'yes' : 'no';
}
