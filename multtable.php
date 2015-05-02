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
		#Check for missing values
		if(!isset($min_multiplicand, $max_multiplicand, $min_multiplier, $max_multiplier)) {
			echo "Missing parameter!";
		}
		else {
			#Check parameters for values less than 0
			if(!is_numeric($min_multiplicand) || $min_multiplicand < 0) {
				echo  "min_multiplicand must be an integer greater than 0!<br />";
			}
			elseif(!is_numeric($max_multiplicand) || $max_multiplicand < 0) {
				echo  "max_multiplicand must be an integer greater than 0!<br />";
			}
			elseif(!is_numeric($min_multiplier) || $min_multiplier < 0) {
				echo  "min_multiplier must be an integer greater than 0!<br />";
			}
			elseif(!is_numeric($max_multiplier) || $max_multiplier < 0) {
				echo  "min_multiplicand must be an integer greater than 0!<br />";
			}
			#Check parameters for max greater than min values
			elseif($min_multiplicand > $max_multiplicand) {
				echo "The minimum multiplicand is larger than the maximum.<br />";
			}
			elseif($min_multiplier > $max_multiplier) {
				echo "The minimum multiplier is larger than the maximum.<br />";
			}
			#Parameters are good; create table with them
			else {
				#echo "Looks good, let's go!<br />";
				
				$rows = $max_multiplicand - $min_multiplicand + 2;
				$cols = $max_multiplier - $min_multiplier + 2;
				$initRowVal = $min_multiplicand;
				$initColVal = $min_multiplier;
				$rowVals = $min_multiplicand;
				$colVals = $min_multiplier;

				echo "<table border = 1px>";
					echo "<thead>";
					echo "<th>";
					echo "</th>";
						for($j = 0; $j < ($cols - 1); $j++) 
						{
							echo "<th>";
							echo $min_multiplier;
							echo "</th>";
							$min_multiplier = $min_multiplier + 1;
						}
					echo "</thead>";
					echo "<tbody>";
						for($i = 0; $i < ($rows - 1); $i++) 
						{
							#$rowVals = $initRowVal;
							$colVals = $initColVal;
							echo "<tr>";
							echo "<th>";
							echo $min_multiplicand;
							$min_multiplicand += 1;
							echo "</th>";
								
							for($j = 0; $j < ($cols - 1); $j++) 
							{
								echo "<td>";
								echo $rowVals * $colVals;
								$colVals += 1;
							}
							$rowVals += 1;

							echo "</tr>";
						}					
					echo "</tbody>";
				echo "</table>";

				
			}

		}
		

		
		?>
		
	</body>
</html>