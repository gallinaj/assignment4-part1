<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Content2</title>
	</head>
	<body>
	<?php
	
		if(session_status() == PHP_SESSION_ACTIVE) {
			
			echo "You have made it to page 2, ".$_SESSION['username']."! ";
			
			#No username was entered
			if(!isset($_SESSION['username'])) {
				echo "A username must be entered. Click <a href=\"login.php\">here</a> ";
				echo " to return to the login screen.";
			}
			else {
				echo "Now click <a href=\"content1.php\">here</a> for the previous page.";
			}
		}
		
 	?>
	</body>
</html>	