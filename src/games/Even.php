<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\runGame;

function runEvenGame()
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $answerAndQuestion = getQuestionAndAnswerEven();
    return runGame($rule, $answerAndQuestion);
}

function getQuestionAndAnswerEven()
{
    $questions = [];
    $answers = [];
    $countOfQuestionsAndAnswers = 3;

    while ($countOfQuestionsAndAnswers > 0) {
        $randNumber = rand(1, 99);
        $questions[] = $randNumber;
        $answers[] = $randNumber % 2 === 0 ? 'yes' : 'no';
        $countOfQuestionsAndAnswers--;
    }
    return [$questions, $answers];
}
