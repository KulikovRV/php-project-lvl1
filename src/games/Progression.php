<?php

namespace Brain\Games\games\Progression;

use function Brain\Games\Engine\runGame;

function runProgressionGame()
{
    $rule = 'What number is missing in the progression?';
    $answerAndQuestion = getQuestionAndAnswersProgression();
    return runGame($rule, $answerAndQuestion);
}

function getQuestionAndAnswersProgression()
{
    $questions = [];
    $answers = [];
    $countOfQuestionsAndAnswers = 3;

    for ($i = 0; $i < $countOfQuestionsAndAnswers; $i++) {
        $randStartValue = rand(1, 99);
        $randStep = rand(1, 10);
        $randLength = rand(5, 10);
        $progression = getProgression($randStartValue, $randStep, $randLength);
        $randIndex = array_rand($progression);
        $answers[] = $progression[$randIndex];
        $progression[$randIndex] = '..';
        $questions[] = implode(" ", $progression);
    }

    return [$questions, $answers];
}

function getProgression($startValue, $step, $length)
{
    $progression = [];

    for ($i = 0; $i < $length; $i++) {
        $progression[] = $startValue;
        $startValue += $step;
    }

    return $progression;
}
