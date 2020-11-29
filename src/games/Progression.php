<?php

namespace Brain\Games\games\Progression;

use function Brain\Games\Engine\runGame;

function runProgressionGame()
{
    $rule = 'What number is missing in the progression?';
    $answersAndQuestions = getQuestionsAndAnswersProgression();
    runGame($rule, $answersAndQuestions);
}

function getQuestionsAndAnswersProgression()
{
    $questionsAndAnswers = [];
    $countOfQA = 3;

    for ($i = 0; $i < $countOfQA; $i++) {
        $randStartValue = rand(1, 99);
        $randStep = rand(1, 10);
        $randLength = rand(5, 10);
        $progression = getProgression($randStartValue, $randStep, $randLength);
        $randIndex = array_rand($progression);
        $hiddenNumber = $progression[$randIndex];
        $progression[$randIndex] = '..';
        $questionsAndAnswers[$i] = [
            'correctAnswer' => (string)$hiddenNumber,
            'question' => implode(" ", $progression)
        ];
    }

    return $questionsAndAnswers;
}

function getProgression($startValue, $step, $length)
{
    $progression = [];
    $number = $startValue;

    for ($i = 0; $i < $length; $i++) {
        $progression[] = $number;
        $number += $step;
    }

    return $progression;
}
