<?php
require_once './functions.php';

$args = array_slice($argv, 1);
printFooBarOrNumbers($args);