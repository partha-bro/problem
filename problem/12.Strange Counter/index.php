<?php
	$tittle = "Bob has a strange counter. At the first second, it displays the number 3. Each second, the number displayed by the counter decrements by 1 until it reaches 1.<br/>
		The counter counts down in cycles. In next second, the timer resets to 2 x the initial number fir the prior cycle and continues counting down. The diagram below shows the counter values for each time t in the first three cycles:<br/>
			example: Time t = 4 marks the beginning of the second cycle. It is double the number displayed at the beginning of the first cycle: 2x3=6. This is also shown in the diagram in the Problem Statement above.";
	require_once("../../theme.html");

	$t = [4];
	foreach ($t as $key => $value) {
		# code...
		$result = strangeCounter($value);
		// echo "input string: $value <br/>";
		// echo "output = $result <br/>";
	}
	

	function strangeCounter($t) {
		$time = 1;
		$value = 3;
		$flag = 0;
		$min = 0;
		$output = 0;
		
		for ($i=0; $i < $t; $i++) { 
			# code...
			
			if ($output == 1) {
				# code...
				$flag++;
				$i=0;
				$output = 3 * pow(2, $flag) - $i;
			}else{
				$output = 3 * pow(2, $flag) - $i;
			}
			echo "$time = $output<br/>";
			$time++;
		}
	}