<?php
	$title = "Array Plus Minus";
	$question = 'Count the total positive, nagative & zero also devided by number of array';
	require_once("../../theme.html");

	$arr = [-4,3,-9,0,4,1];
	plusMinus($arr);

	function plusMinus($arr){
		$pos = 0;
		$neg = 0;
		$zero = 0;
		$size = count($arr);
		foreach ($arr as $key => $value) {
			# code...
			if ($value>0) {
				# code...
				$pos++;
			}elseif ($value<0) {
				# code...
				$neg++;
			}else{
				$zero++;
			}
		}
		echo "input array:";
		print_r($arr);
		echo "<br/>Answer:<br/>";
		echo $pos/$size;
		echo "<br/>";
		echo $neg/$size;
		echo "<br/>";
		echo $zero/$size;
	}