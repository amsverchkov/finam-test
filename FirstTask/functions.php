<?php

function getArgsErrors($args): ?string
{
    $errors = '';

    if (count($args) !== 2) {
        $errors .= "Command accepts exact two args\r\n";
    }

    if (!is_numeric($args[0]) || !is_numeric($args[1])) {
        $errors .= "Command accepts only numbers \r\n";
    }

    $firstNumber = (float)$args[0];
    $secondNumber = (float)$args[1];

    if ($firstNumber > $secondNumber) {
        $errors .= "Second arg should be greater then first \r\n";
    }

    return $errors !== '' ? $errors : null;
}

function printFooBarOrNumbers($args): void
{

    $errors = getArgsErrors($args);
    if ($errors) {
        die($errors);
    }

    $startNumber = $args[0];
    $stopNumber = $args[1];

    for ($i = $startNumber; $i <= $stopNumber; $i++) {
        if ($i % 3 && $i % 5) {
            echo "FooBar\r\n";
        } elseif ($i % 3) {
            echo "Foo\r\n";
        } elseif ($i % 5) {
            echo "Bar\r\n";
        } else {
            echo "{$i}\r\n";
        }
    }
}