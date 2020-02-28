<?php
	$tittle = 'multiples of 3 or 5, their sum';
	require_once("../../theme.html");

	
	function mul($num){
	    //convert negative no to positive number
	    $num = abs($num);
	    $output = 0;
	    for($i=0;$i<$num;$i++ ){
	        if($i%3 == 0 or $i%5 == 0){
	            $output += $i;
	        }else{
	            continue;
	        }
	    }
	    return $output;
	}
	echo 'no=100, sum of all divisible no by 3 or 5= '.mul(100).'<br/>';
	echo 'no=10, sum of all divisible no by 3 or 5= '.mul(10).'<br/>';
	echo 'no=2, sum of all divisible no by 3 or 5= '.mul(2);