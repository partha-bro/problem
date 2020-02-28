<?php
	$tittle = ' if your niece is turning 4 years old, and the cake will have 4 candles of height 4,4,1,3, she will be able to blow out 2 candles successfully, since the tallest candles are of height 4 and there are 2 such candles.';
	require_once("../../theme.html");

	$ar = [3,2,1,3];
	$result = birthdayCakeCandles($ar);
	echo "input array [3,2,1,3] <br/>";
	echo "number of large element: $result";

	function birthdayCakeCandles($ar) {
		$max = 0;
		$count = 0;
		$max = array_reduce($ar, function($carry,$item){
						return $carry>$item?$carry:$item;
					});
		foreach ($ar as $key => $value) {
			# code...
			if ($max == $value) {
				# code...
				$count++;
			}
		}
		return $count;
	}