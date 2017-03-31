<?php

$alphas = range('a', 'z');
	$grid = array();
	$k = 5;

	$stringExp = "aa";

	$possibleExits = array();

	$exitstring = "z";

	for ($i=5;$i<=$k;$i++) {
		$exitstring = $exitstring."z";
		$possibleExits[] = $exitstring;
	}

	print_r($possibleExits);

	$endLoop = 'aaaaaa';

	while ($stringExp != $endLoop) {
		echo $stringExp . ".ie,\n";

		if(array_search($stringExp, $possibleExits)!==false){
			$number_of_letters = array_search($stringExp, $possibleExits) + 2;
			$stringExp = "a";

			for($j=0;$j<2;$j++){
				$stringExp = $stringExp."a";
			}
		}
		else{
			$stringExp++;
		}
	}