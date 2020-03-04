<?php
	$title = "Strange Counter";
	$question = "Bob has a strange counter. At the first second, it displays the number 3. Each second, the number displayed by the counter decrements by 1 until it reaches 1.<br/>
		The counter counts down in cycles. In next second, the timer resets to 2 x the initial number fir the prior cycle and continues counting down. The diagram below shows the counter values for each time t in the first three cycles:<br/>
			example: Time t = 4 marks the beginning of the second cycle. It is double the number displayed at the beginning of the first cycle: 2x3=6. This is also shown in the diagram in the Problem Statement above.";
	require_once("../../theme.html");

	$t = [4,10,17,100];
	foreach ($t as $key => $value) {
		# code...
		$result = strangeCounter($value);
		echo "input string: $value <br/>";
		echo "output = $result <br/><br/>";
	}
	

	function strangeCounter($t) {
		$flag = 0;
		$time = 0;
		$value = 3;
		$i = 0;
		$var = 0;

		//find the power of 2 for multiplication 
		do{ 
			# code...
			$pre_time = $time;
			$value = 3*pow(2, $i); 
			$time = $time + $value;
			if ($t <= $time) {
				# code...
				break;
				// return $flag;
			}else{
				$i++;
				$flag++;
			}
		}while ($i < $t);

		//find value
		$round = 3*pow(2, $flag);
		echo "flag=".$flag." Round=".$round." pre_time=".$pre_time." time=".$time;

		for ($i=0; $i < $round; $i++) { 
			# code...
			$pre_time++;
			if ($pre_time == $t) {
				# code...
				$var = $i;
			}else{
				// $pre_time++;
			}
		}
		echo " var=$var <br/>";
		$output = (3*pow(2, $flag)) - $var;
		return $output;
	}