<?php

function getArgsErrors(array $args): ?string
{

    if (count($args) !== 2) {
        return "Command accepts exact two args\r\n";
    }

    if (!is_numeric($args[0]) || !is_numeric($args[1])) {
        return "Command accepts only numbers \r\n";
    }

    $firstNumber = (float)$args[0];
    $secondNumber = (float)$args[1];

    if ($firstNumber > $secondNumber) {
        return "Second arg should be greater then first \r\n";
    }

    return null;
}

function printFooBarOrNumbers(array $args): void
{

    $errors = getArgsErrors($args);
    if ($errors) {
        die($errors);
    }

    $startNumber = $args[0];
    $stopNumber = $args[1];

    for ($i = $startNumber; $i <= $stopNumber; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo "FooBar\r\n";
        } elseif ($i % 3 === 0) {
            echo "Foo\r\n";
        } elseif ($i % 5 === 0) {
            echo "Bar\r\n";
        } else {
            echo "{$i}\r\n";
        }
    }
}