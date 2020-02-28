
<?php
	$tittle = 'Calculator';
	require_once("../../theme.html");
	
	
?>
	<form action="" method="post">
		1st no: &nbsp;<input type="number" name="no_1" value="<?php echo @$_POST['no_1'] ?>"><br><br>
		2nd no: <input type="number" name="no_2" value="<?php echo @$_POST['no_2'] ?>"><br><hr>
		<input type="submit" name='add' value="add">
		<input type="submit" name='sub' value="sub">
		<input type="submit" name='mul' value="mul">
		<input type="submit" name='div' value="div">
		<input type="submit" name='mod' value="mod">
		<input type="submit" name='pow' value="pow">
		<input type="submit" name='sqrt' value="sqrt">
		<input type="submit" name='max' value="max">
		<input type="submit" name='min' value="min">
	</form>
	<?php
		require_once('function.php');
		

		if(isset($_POST['add'])){
			$result = add(@$_POST['no_1'],@$_POST['no_2']);
		}elseif (isset($_POST['sub'])) {
			# code...
			$result = sub(@$_POST['no_1'],@$_POST['no_2']);
		}elseif (isset($_POST['mul'])) {
			# code...
			$result = mul(@$_POST['no_1'],@$_POST['no_2']);
		}elseif (isset($_POST['div'])) {
			# code...
			$result = div(@$_POST['no_1'],@$_POST['no_2']);
		}elseif (isset($_POST['pow'])) {
			# code...
			$result = pow(@$_POST['no_1'],@$_POST['no_2']);
		}elseif (isset($_POST['sqrt'])) {
			# code...
			$result = '1st = '.sqrt(@$_POST['no_1']). ', 2nd = ' .sqrt(@$_POST['no_2']);
		}elseif (isset($_POST['max'])) {
			# code...
			$result = max(@$_POST['no_1'],@$_POST['no_2']);
		}elseif (isset($_POST['min'])) {
			# code...
			$result = min(@$_POST['no_1'],@$_POST['no_2']);
		}else {
			# code...
			$result = mod(@$_POST['no_1'],@$_POST['no_2']);
		}
		

	?>
	<p>Your answer is <?php echo @$result; ?></p>