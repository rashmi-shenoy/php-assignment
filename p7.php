
	<?php
	$amount = '';
	$pre_unit = '';
	if (isset($_POST['submit'])) {
		$units = $_POST['kwh'];
		if (!empty($units)) {
			$pre_unit = calculate($units);
			$amount = 'Total amount of ' . $units . ' units ->' . $pre_unit;
		}
	}
	
	function calculate($units) {
		$firstunit= 3;
		$secondunit = 4;
		$thirdunit = 5;
		$fourthunit = 6;

		if($units <= 100) {
			$bill = $units * $firstunit;
		}
		else if($units > 100 && $units <= 200) {
			$temp = 100 * $firstunit;
			$remaining_units = $units - 100;
			$bill = $temp + ($remaining_units * $secondunit);
		}
		else if($units > 100 && $units <= 200) {
			$temp = (100 * $firstunit) + (100 * $secondunit);
			$remaining_units = $units - 200;
			$bill = $temp + ($remaining_units * $thirdunit);
		}
		else {
			$temp = (100 * $firstunit) + (100 * $secondunit) + (100 * $thirdunit);
			$remaining_units = $units - 300;
			$bill = $temp + ($remaining_units * $fourthunit);
		}
		return number_format((float)$bill, 2, '.', '');
	}
	?>
	<div >
		<h3>Calculate electricity bill</h3>
		<div >
		<form action="" method="post">
		<div>
			<input type="number" name="kwh" placeholder="Please enter no. of Units"  />
			
			<input type="submit" name="submit" value="Submit" />
		</div>	
		</form>
		</div>
		<div>
		    <?php echo '<br />' . $amount; ?>
		</div>
	</div>