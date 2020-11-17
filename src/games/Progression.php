<?php

namespace Brain\Games\Progression;

use function Brain\Games\Engine\runGame;

function runProgressionGame()
{
    $rule = getRulesProgression();
    $answerAndQuestion = getQuestionAndAnswersProgression();
    return runGame($rule, $answerAndQuestion);
}

function getRulesProgression()
{
     return 'What number is missing in the progression?';
}

function getQuestionAndAnswersProgression()
{
    $questions = [];
    $answers = [];
    $countOfQuestionsAndAnswers = 3;

    while ($countOfQuestionsAndAnswers > 0) {
        $progression = [];
        $randStartValue = rand(1, 99);
        $randStep = rand(1, 10);

        for ($i = rand(5, 10); $i > 0; $i--) {
            $progression[] = $randStartValue;
            $randStartValue += $randStep;
        }

        $randIndex = array_rand($progression);
        $answers[] = $progression[$randIndex];

        $progression[$randIndex] = '..';
        $questions[] = implode(" ", $progression);

        $countOfQuestionsAndAnswers--;
    }

    return [$questions, $answers];
}
