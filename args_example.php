<?php

if ($argc == 3) {

	$min = $argv[1];
	$max = $argv[2];

// $min = min($argv);
// $max = max($argv);

	$min = (is_numeric($argv[1])) ? $argv[1] : 1;
	$max = (is_numeric($argv[2]) ? $argv[2] : 100;

// $max = ($argv[1] > $argv[2]) ? $argv[1] : $argv[2];

if ()
	$max = $argv[2];
} else {
	$low = 1;
	$high = 100;
}

echo "guess from $min to $max";