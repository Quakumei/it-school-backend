<?php

for($i =0; $i <= 100; $i++) {
	$a = $i % 3 == 0;
	$b = $i % 5 == 0;
	$flag = true;
	if ($a) {
		echo "Fizz";
		$flag = false;
	}
	if ($b) {
		echo "Buzz";
		$flag = false;
	}
	if ($flag) {
		echo $i;
	}
	echo "\r\n";
}

?>
