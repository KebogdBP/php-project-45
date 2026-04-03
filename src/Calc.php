<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\play;

function start(string $name): void
{
    $description = 'What is the result of the expression?';

    $generateData = function () {
        $num1 = rand(1, 50);
        $num2 = rand(1, 50);
        $operators = ['+', '-', '*'];
        $operator = $operators[array_rand($operators)];

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            default:
                $result = 0;
        }

        $question = "$num1 $operator $num2";
        return [$question, (string) $result];
    };

    play($description, $generateData, $name);
}
