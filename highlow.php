<?php

$ran = mt_rand(0, 100);
fwrite (STDOUT, 'Please guess a number:');

do {
	
	$guess = trim(fgets(STDIN));

	if (!(is_numeric($guess))) 
	{
		if ($guess > $ran) {
			echo "LOWER \n";
		}
		elseif ($guess < $ran) {
			echo "HIGHER \n";
		}
		else {
			echo "Use a number please! \n";
		}
	}
} while ($guess != $ran); 
	echo "GOOD GUESS \n";


