<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Loopback</title>
	</head>
	<body>
		<?php

		#Code assistance from http://stackoverflow.com/questions/8140915/how-to-handle-unknown-number-of-items-from-a-form-in-php
#		$a = array('foo' => 'bar', 'baz' => 'long');
#		echo "<p>";
#		echo json_encode($a);
#		echo "</p>";
		
 		if(isset($_GET)) {
#			echo json_encode($_GET), "\n";

			echo "{\"Type\":\"[GET]\"";

			foreach($_GET as $key => $value) {
				
				if($value == null) {
					$value = "null";
				}

				echo "{\"$key\":\"$value\"}";
			}
			echo "}";
		}
		
		if(isset($_POST)) {
#		else {
#			echo json_encode($_POST);
			echo "{\"Type\":\"[POST]\"";

			foreach($_POST as $key => $value) {

				if($value == null) {
					$value = "null";
				}
				
				echo "{\"$key\":\"$value\"}";
			
			}
			echo "}";	
		} 
#			echo json_encode($_GET), "\n";
#			echo json_encode($_POST);

		
		?>
	</body>
</html>