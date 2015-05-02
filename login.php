<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Screen</title>
	</head>
	<body>
		<?php
			echo "<form id=\"login\" method=\"POST\" action=\"content1.php\">";
				echo "<span>Enter username </span><input type=\"text\" name=\"username\"><br />";
				echo "<input type=\"submit\" value=\"Login\"><br />";
			echo "</form>";
		?>
	</body>
</html>