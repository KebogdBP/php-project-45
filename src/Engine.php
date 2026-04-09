<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function play(string $description, callable $generateData, string $name): void
{
    line($description);

    for ($i = 0; $i < 3; $i++) {
        [$question, $correctAnswer] = $generateData();

        line("Question: %s", $question);
        $userAnswer = prompt('Your answer');

        if ($userAnswer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }

        line('Correct!');
    }

    line("Congratulations, %s!", $name);
}
