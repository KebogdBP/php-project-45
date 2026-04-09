<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\play;

//NOD
function start(string $name): void
{
    $description = 'Find the greatest common divisor of given numbers.';

    $generateData = function () {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);

        $question = "$num1 $num2";
        $answer = gcd($num1, $num2);

        return [$question, $answer];
    };

    play($description, $generateData, $name);
}

//Вычисляет наибольший общий делитель (НОД) двух чисел
//Используем алгоритм Евклида

function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    return $a;
}
