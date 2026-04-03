<?php

namespace BrainGames\Even;

use function BrainGames\Engine\play;

function start(string $name): void
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';

    $generateData = function () {
        $number = rand(1, 100);
        $answer = ($number % 2 === 0) ? 'yes' : 'no';
        return [$number, $answer];
    };

    play($description, $generateData, $name);
}
