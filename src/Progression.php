<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\play;

//Генерирует арифметическую прогрессию.

function generateProgression(int $start, int $step, int $length): array
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}


//Запуск игры "Арифметическая прогрессия".

function start(string $name): void
{
    $description = 'What number is missing in the progression?';

    $generateData = function () {
        // Генерируем параметры прямо здесь:
        // старт: 1–100, шаг: 1–5, длина: 5–15
        $start = rand(1, 100);
        $step = rand(1, 5);
        $length = rand(5, 15);
        $hideIndex = rand(0, $length - 1);

        $progression = generateProgression($start, $step, $length);
        $correctAnswer = (string) $progression[$hideIndex];
        $progression[$hideIndex] = '..';

        $question = implode(' ', $progression);

        return [$question, $correctAnswer];
    };

    play($description, $generateData, $name);
}
