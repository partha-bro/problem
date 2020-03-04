<?php
	$title = "StairCase";
	$question = 'Staircase';
	require_once("../../theme.html");

	$n = 4;

	staircase($n);

	function staircase($n) {
	  $n = abs($n);
	  for ($i=1; $i <= $n; $i++) { 
	  	# code...
	  	for ($j=$n-$i; $j >= 1; $j--) { 
	  		# code...
	  		echo "&nbsp;";
	  	}
	  	for ($z=$i; $z >= 1; $z--) { 
	  		# code...
	  		print('#');
	  	}
	  	echo "<br/>";
	  }

	}