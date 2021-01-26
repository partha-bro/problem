<?php
	$title = "Kangaroo";
	$question = "<pre>You are choreographing a circus show with various animals. For one act, you are given two kangaroos on a number line ready to jump in the positive direction (i.e, toward positive infinity).<br/>

<li>The first kangaroo starts at location x1 and moves at a rate of v1 meters per jump.</li>
<li>The second kangaroo starts at location x2 and moves at a rate of v2 meters per jump.</li><br/>
You have to figure out a way to get both kangaroos at the same location at the same time as part of the show. If it is possible, return YES, otherwise return NO.<br/><br/>

For example, kangaroo 1 starts at x1 = 2 with a jump distance v1 = 1 and kangaroo 2 starts at x2 = 1 with a jump distance of v2 = 2. After one jump, they are both at x = 3, (x1 + v1 = 2+1,x2+v2=1+2 ), so our answer is YES.</pre>";
	require_once("../../theme.html");

	$x1=0;
	$v1=3;
	$x2=4;
	$v2=2;
	$result = kangaroo($x1, $v1, $x2, $v2);
	echo "output: $result <br/>";
	$x1=0;
	$v1=1;
	$x2=5;
	$v2=3;
	$result = kangaroo($x1, $v1, $x2, $v2);
	echo "output: $result <br/>";

	function kangaroo($x1, $v1, $x2, $v2) {
		echo "Input Value x1=$x1 v1=$v1 x2=$x2 v2=$v2 <br>";
		for ($i=1; $i < ($x1+$v1+$x2+$v2); $i++) { 
			# code...
			if ($x1+($v1*$i) == $x2+($v2*$i)) {
				return "YES";
			}
			// echo "$i";
		}
		return "NO";
	}