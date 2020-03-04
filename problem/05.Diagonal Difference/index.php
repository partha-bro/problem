<?php
	$title = "Diagonal Difference";
	$question = 'Diagonal Difference';
	require_once("../../theme.html");

	function diagonalDiff($arr){
		$ltr = 0;
		$rtl = 0;
		$minus = 0;
		$i = 0;
		$j = 0;
		$no = 0;
		while ($no < count($arr)) {
			# code...
			$ltr += $arr[$i][$j];
			$i++;
			$j++;
			$no++;
		}
		$i = 0;
		$j = count($arr)-1;
		$no = 0;
		while ($no < count($arr)) {
			# code...
			$rtl += $arr[$i][$j];
			$i++;
			$j--;
			$no++;
		}
		$minus = abs($ltr-$rtl);
		return $minus;
	}

	$arr = [[11,2,4],[4,5,6],[10,8,-12]];
	$result = diagonalDiff($arr);
	echo "input file: ";
	print_r($arr);
	echo "result= $result";
