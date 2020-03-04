<?php
	$title = "SortedSquareArray";
	$question = 'SortedSquareArray';
	require_once("../../theme.html");
	
	/**
	 * 
	 */
	class myClass
	{
		private $result;
		function __construct()
		{
			# code...
			echo "Ready to take an array as input [-6,-4,1,2,3,5,-12]<br/>";
		}
		public function sortSqurt($arr = [-6,-4,1,2,3,5,-12]){
			sort($arr);
			// print_r($arr);
			foreach ($arr as $key => $value) {
				# code...
				$max = array_reduce($arr, function($carry,$item){
					return abs($carry)>abs($item)?$carry:$item;
				});
				$result[] = pow($max,2);
				$o[] = $max;
				$arr = array_diff($arr,$o);
			}
			print_r( $result );
		}
	}

	$obj = new myClass;
	$obj->sortSqurt();
?>

