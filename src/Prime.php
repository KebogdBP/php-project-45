<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\play;

//Предикат: проверяет, является ли число простым.

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    if ($number === 2) {
        return true;
    }

    if ($number % 2 === 0) {
        return false;
    }

    for ($i = 3; $i * $i <= $number; $i += 2) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}


//Запуск игры "Простое ли число?".

function start(string $name): void
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $generateData = function () {
        $number = rand(1, 100);
        $answer = isPrime($number) ? 'yes' : 'no';
        return [(string) $number, $answer];
    };

    play($description, $generateData, $name);
}
