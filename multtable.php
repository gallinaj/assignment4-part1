<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Multiplication</title>
	</head>
	<body>
		<?php
		extract($_GET);
		
		#Code assistance from lecture, 290 study session, 
		if(!isset($min_multiplicand, $max_multiplicand, $min_multiplier, $max_multiplier)) {
			echo "Missing parameter!";
		}
		else {
			if(!is_numeric($min_multiplicand) || $min_multiplicand < 0) {
				echo  "min_multiplicand must be an integer greater than 0!<br />";
			}
			if(!is_numeric($max_multiplicand) || $max_multiplicand < 0) {
				echo  "max_multiplicand must be an integer greater than 0!<br />";
			}
			if(!is_numeric($min_multiplier) || $min_multiplier < 0) {
				echo  "min_multiplier must be an integer greater than 0!<br />";
			}
			if(!is_numeric($max_multiplier) || $max_multiplier < 0) {
				echo  "min_multiplicand must be an integer greater than 0!<br />";
			}
			
			if($min_multiplicand > $max_multiplicand) {
				echo "The minimum multiplicand is larger than the maximum.<br />";
			}
			if($min_multiplier > $max_multiplier) {
				echo "The minimum multiplier is larger than the maximum.<br />";
			}
			else {
				echo "Looks good, let's go!<br />";
			}
		
		
		
		}
		

		
		?>
		
	</body>
</html>