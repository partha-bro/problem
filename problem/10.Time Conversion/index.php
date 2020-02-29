<?php
	$tittle = ' Given a time in 12-hour AM/PM format, convert it to military (24-hour) time';
	require_once("../../theme.html");

	//input time
	$s = '12:05:45PM';

	//call defined function
	$result = timeConversion($s);

	//output section
	echo "input time: 12:05:45AM <br/>";
	echo "Output in 24 format: $result";

	//declare function about time conversion
	function timeConversion($s) {
    /*
     * Write your code here.
     */
    	// find AM/PM in time string
	    $t = substr($s, 8);
	    if ($t == 'AM') {
	    	# code for AM Format...
	    	if (substr($s, 0,2) == 12) {
	    		# code for 12 hour AM...
	    		$time = str_replace(substr($s, 0,2), '00', $s);
	    		$time = str_replace($t, '', $time);
	    	}else{
	    		$time = str_replace($t, '', $s);
	    	}
	    	
	    }elseif ($t == 'PM') {
	    	# code for PM Format...
	    	if (substr($s, 0,2) == 12) {
	    		# code for 12 hour PM...
	    		$time = str_replace(substr($s, 0,2), '12', $s);
	    	}else{
	    		$hour = substr($s, 0,2) + 12;
	    		$time = str_replace(substr($s, 0,2), $hour, $s);
	    	}
	    	
	    	$time = str_replace($t, '', $time);
	    }else{echo "Wrong time input format!";}

	    return $time;
	}