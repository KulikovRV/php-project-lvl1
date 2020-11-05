<?php

namespace Brain\Games\Progression;

use function cli\line;

function printRulesProgression()
{
    return line('What number is missing in the progression?');
}

function addQuestionProgression()
{
    $array = [];
    $randStartValue = rand(1, 99);
    $randStep = rand(1, 10);

    for ($i = rand(5, 10); $i > 0; $i--) {
        $array[] = $randStartValue;
        $randStartValue += $randStep;
    }

    $randIndex = array_rand($array);
    $array[$randIndex] = '..';
    return implode(" ", $array);
}

function calculateCorrectAnswerProgression($question)
{
    $array = explode(" ", $question);
    $twoAdjacentValues = [];

    for ($i = 0; count($twoAdjacentValues) < 2; $i++) {
        if ($array[$i] === "..") {
            array_pop($twoAdjacentValues);
        } else {
            $twoAdjacentValues[] = $array[$i];
        }
    }

    $step = $twoAdjacentValues[1] - $twoAdjacentValues[0];
    $indexDesiredValue = array_search("..", $array);

    if ($indexDesiredValue === 0) {
        $result = $array[1] - $step;
    } else {
        $result = $array[$indexDesiredValue - 1] + $step;
    }
    return $result;
}
