<?php

for($i =0; $i <= 100; $i++) {
	$a = $i % 3 == 0;
	$b = $i % 5 == 0;
	if ($a){
		echo "Fizz";
	}
	if ($b){
		echo "Buzz";
	}
	if (!($a || $b)){
		echo $i;
	}
	echo "\r\n";
}

?>
