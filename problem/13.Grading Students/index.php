<?php
	$title = "Grading Students";
	$question = "<pre>Sam is a professor at the university and likes to round each student's grade according to these rules:<br/>

If the difference between the grade and the next multiple of 5 is less than 3, round grade up to the next multiple of 5.<br/>
If the value of grade is less than 38, no rounding occurs as the result will still be a failing grade.<br/>
For example, grade=84 will be rounded to 85 but grade=29 will not be rounded because the rounding would result in a number that is less than 40.<br/>

Given the initial value of grade for each of Sam's n students, write code to automate the rounding process.</pre>";
	require_once("../../theme.html");

	$grades = [73,67,38,33];
	$result = gradingStudents($grades);
	echo "input string: ";
	print_r($grades);
	echo "<br/>";
	echo "output:";
	print_r($result);

	function gradingStudents($grades) {
    // Write your code here
		$output = array();
		foreach ($grades as $key => $value) {
			# code...
			if ($value >=0 and $value <= 100) {
				# code...
				if($value < 38){
					$output[] = $value;
				}else{
					$old_value = $value;
					for ($i=0; $i <= 5; $i++) { 
						# code...
						if ($value%5 == 0) {
							# code...
							$new_value = $value;
							break;
						}
						$value++;
					}
					//echo("$new_value");
					if (($new_value - $old_value) < 3) {
						# code...
						$output[] = $new_value;
					}elseif (($new_value - $old_value) == 3) {
						# code...
						$output[] = $old_value;
					}else{
						$output[] = $old_value;
					}
				}
			}
		}
		return $output;
	}