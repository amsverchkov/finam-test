<?php
require_once dirname(__FILE__) . '/functions.php';

$args = array_slice($argv, 1);
printFooBarOrNumbers($args);