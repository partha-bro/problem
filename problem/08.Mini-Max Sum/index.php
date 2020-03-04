<?php
	$title = "Mini-Max & Sum";
	$question = 'Mini-Max Sum';
	require_once("../../theme.html");

	$arr = [5,3,4,1,2];
	miniMaxSum($arr);
	function miniMaxSum($arr) {
		sort($arr);
		$ltr = 0;
		$rtl = 0;
		for ($i=0; $i < count($arr)-1; $i++) { 
			# code...
			$ltr += $arr[$i];
		}
		for ($i=1; $i < count($arr); $i++) { 
			# code...
			$rtl += $arr[$i];
		}
		echo "input array: [5,3,4,1,2] <br/>";
		echo "Result: $ltr $rtl";
	}