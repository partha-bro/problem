<?php
	$title = "Problems";
	$question = 'code ['.date("d-M-Y").']';
	require_once("theme.html");

	$dir = "problem";

		// Open a directory, and read its contents
		if (is_dir($dir)){
		  if ($dh = opendir($dir)){
			  echo "<table class='table table-hover table-condensed' border='0px' cellpadding='0' cellspacing='0'>";
			while (($file = readdir($dh)) !== false){
				$time = date('d-M-Y',filemtime($dir.'/'.$file));
				if($file != "."){
					if($file != ".."){
							echo "<tr>";
								echo "<td class='text-success'>" . $file. "</td>";
								echo "<td class='right text-info'>==>&nbsp;&nbsp;&nbsp;&nbsp; </td>";
								echo "<td class='right'><a class='btn btn-sm text-success' href='".$dir."/".$file."' target='_blank'>play</a></td>";
							echo "</tr>";
					}
				}
			}
			echo "</table>";
			closedir($dh);
		  }
		}
?>
	
