<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Content2</title>
	</head>
	<body>
	<?php
		#No username was entered
		if(!isset($_POST['username'])) {
			echo "A username must be entered. Click <a href=\"login.php\">here</a> ";
			echo " to return to the login screen.";
		}
		else {
			echo "Click <a href=\"content2.php\">here</a> for the previous page.";
		}
 	?>
	</body>
</html>	