<?php
	$title = "Apple and Oranges";
	$question = "Sam's house has an apple tree and an orange tree that yield an abundance of fruit. In the diagram below, the red region denotes his house, where s is the start point, and t is the endpoint. The apple tree is to the left of his house, and the orange tree is to its right. You can assume the trees are located on a single point, where the apple tree is at point a, and the orange tree is at point b.<br/><br/>

	For example, Sam's house is between s=7 and t = 10. The apple tree is located at a=4 and the orange at b=12. There are m=3 apples and n=3 oranges. Apples are thrown apples=[2,3,-4] units distance from a, and oranges=[3,-2,-4] units distance. Adding each apple distance to the position of the tree, they land at [4+2,4+3,4+-4] = [6,7,0]. Oranges land at [12+3,12+-2,12+-4]=[15,10,8]. One apple and two oranges land in the inclusive range 7 to 10 so we print 1 apple 2 oranges";
	require_once("../../theme.html");

	echo "Input Value s=7 t=11 a=5 b=15 apples=[-2,2,1] oranges=[5,-6] <br>";
	$s=7;
	$t=11;
	$a=5;
	$b=15;
	$apples=[-2,2,1,3,5];
	$oranges=[5,-6,-7];
	countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);

	function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
		$num_apple = 0;
		$num_orange = 0;
		for ($i=0; $i < count($apples); $i++) { 
			# code...
			if ($apples[$i]<0) {
				# code...
				continue;
			}else{
				if (($apples[$i]+$a) >= $s and ($apples[$i]+$a) <= $t) {
					# code...
					$num_apple++;
				}
			}
		}
		for ($i=0; $i < count($oranges); $i++) { 
			# code...
			if ($oranges[$i]>0) {
				# code...
				continue;
			}else{
				if (($oranges[$i]+$b) >= $s and ($oranges[$i]+$b) <= $t) {
					# code...
					$num_orange++;
				}
			}
		}
		print("Apples =".$num_apple."\n Oranges =".$num_orange);
	}