<?php
// Check for three arguments
if ($argc == 3) {
    echo "arg1 is {$argv[1]} and arg2 is {$argv[2]}\n";

    // Assign values from arguments
	$min = ($argv[1]);
    $max = ($argv[2]);

    // Generate a random number from min/max
    $ran = mt_rand($min, $max);
}

else {
	$ran = mt_rand(0, 100);
}


do {
	fwrite(STDOUT, 'Please guess a number:');
	$guess = trim(fgets(STDIN));

	if (is_numeric($guess))
	{
		if ($guess > $ran) {
			echo "LOWER \n";
		}
		elseif ($guess < $ran) {
			echo "HIGHER \n";
		}
	}
else {
	echo "Use a number please! \n";
	}

} while ($guess != $ran); 
	echo "GOOD GUESS \n";

?>
