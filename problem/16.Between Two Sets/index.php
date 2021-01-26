<?php
	$title = "Between Two Sets";
	$question = "<pre>You will be given two arrays of integers and asked to determine all integers that satisfy the following two conditions:<br/>

<li>The elements of the first array are all factors of the integer being considered</li>
<li>The integer being considered is a factor of all elements of the second array</li>
These numbers are referred to as being between the two arrays. You must determine how many such numbers exist.<br>

For example, given the arrays a = [2,6] and b=[24,36], there are two numbers between them: 6 and 12. 6%2 = 0, 6%6 = 0, 26%6 = 0 and 36%6 = 0 for the first value. Similarly, 12%2 = 0, 12%2 = 0 and 24%12 = 0, 36%2 = 0.</pre>";
	require_once("../../theme.html");

	$arr = [2,4];
	$brr = [16,32,96];
	$total = getTotalX($arr, $brr);
	echo "$total";
		
	function getTotalX($a, $b) {
    // Write your code here
		
	}