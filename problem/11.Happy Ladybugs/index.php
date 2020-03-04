<?php

	$title = "Happy Ladybugs";
	$question = "Happy Ladybugs is a board game having the following properties:<br/>

    1.The board is represented by a string, b, of length n. The i character of the string,b[i], denotes the i cell of the board.<br/>

    If b[i] is an underscore (i.e., _), it means the i cell of the board is empty.<br/>
    If b[i] is an uppercase English alphabetic letter (ascii[A-Z]), it means the i cell contains a ladybug of color b[i].<br/>
	String b will not contain any other characters.<br/>

	2.A ladybug is happy only when its left or right adjacent cell (i.e., b[i +- 1]) is occupied by another ladybug having the same color.<br/>
    3.In a single move, you can move a ladybug from its current position to any empty cell.<br/>

Given the values of n and b for g games of Happy Ladybugs, determine if it's possible to make all the ladybugs happy. <br/>
For each game, print YES on a new line if all the ladybugs can be made happy through some number of moves. Otherwise, print NO.<br/>

<br/><br/>
As an example, b=[YYR_B_BR]. You can move the rightmost B and R to make b=[YYRRBB__] and all the ladybugs are happy.";
	require_once("../../theme.html");

	$b = ["4","7","RBY_YBR","6","X_Y__X","2","__","6","B_RRBR"];
	foreach ($b as $key => $value) {
		# code...
		$result = happyLadybugs($value);	
		echo "input string: $value <br/>";
		echo "$result <br/>";
		}
	

	function happyLadybugs($b) {
		if (is_numeric($b) == null) { 	//no validate number
			# code...
			$arr = str_split($b);		//convert into array
				$space=0;				//count the space(underscore)
				$count=0;				//count the happy ladybugs
				$small=0;				//count the small char
				$num = 0;				//count the number in the string
				$flag =array_unique($arr);
				// print_r($flag);
				for ($i=0; $i < count($arr); $i++) { 
					# code...
					if(is_numeric($arr[$i])){	//validate number in each location
						return "no happy because number with string!<br/>";
						$num++;
						break;
					}elseif ($arr[$i] != strtoupper($arr[$i])) {
						return "no happy because small char!<br/>";
						$small++;
						break;
					}elseif ($arr[$i] == "_") {
							$space++;
							break;
					}else{}
				}
			if ($space == 0 and $small == 0 and $num == 0) {
				# code...
				foreach ($flag as $key => $value) {
						# code...
						if ($flag[$key] == @$arr[$key+1]) {
							# code...
							// echo $flag[$key]."==".$arr[$key+1];
							$count++;
						}else{
							break;
						}
					}
				if ($count == count($flag)) {
						return "YES<br/>";
					}else{
						return "NO<br/>";
					}	
			}
			
			if($space>0){
				sort($arr);
				$flag =array_unique($arr);
				array_pop($flag);
				// print_r($flag);
				// die();
				foreach ($flag as $key => $value) {
						# code...
						if ($flag[$key] == @$arr[$key+1]) {
							# code...
							// echo $flag[$key]."==".$arr[$key+1];
							$count++;
						}else{
							break;
						}
					}
				if ($count == count($flag)) {
						# code...
						return "YES<br/>";
					}else{
						return "NO<br/>";
					}	
				// return "make logic<br/>";
			}			
			
		}else{
			return "number found!<br/>";
		}	
	}