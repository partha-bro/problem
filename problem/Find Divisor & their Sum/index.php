<?php
	$tittle = 'Find Divisor & their Sum'; 
	require_once("../../theme.html"); 
?>

<form action="" method="post">
	<input type="text" name="num">
	<input type="submit" name="submit">
</form>
<?php
	if(isset($_POST['submit'])){
		$num = floor(abs($_POST['num']));
		$count = 0;
		$sum = 0;

		for($i = $num; $i>0; $i--){
			$result = $num % $i;
			if($result == 0){
				$count++;
				$sum += $i;
				$ar[] = $i;
			}
		}
		print_r($ar);
		echo '<br/>';
		echo $num.' has '.$count.' divisors and their sum is '. $sum;
	}	
?>