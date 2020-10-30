<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function runGame($game)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    // Общее кол-во раундов
    // Общее приветствие
    // Правильный и неправльный ответ
    // Correct!
    // {$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}
    // Question

    $winStreak = 0;

    while ($winStreak < 3) {
    }
}
