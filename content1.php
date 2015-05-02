<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Content1</title>
	</head>
	<body>
	<?php
		#Starts a new session or resumes a previous one
		#session_start();

		#No username was entered
		if(!isset($_POST['username'])) {
			echo "A username must be entered. Click <a href=\"login.php\">here</a> ";
			echo " to return to the login screen.";
		}	
		#Username was entered and the value is end
#		if(isset($_POST['username']) && $_POST['username'] == 'end') {
			#Empties session array
#			$_SESSION = array();
#			session_destroy;
#			$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
#			$filePath = implode('/', $filePath);
#			$redirect = "http://".$_SERVER['HTTP_HOST'].$filePath;
#			header("Location: {redirect}login.php", true);
#			die();
#		}
		
		if(session_status() == PHP_SESSION_ACTIVE) {
			#Write to session array
			#Username was entered
			if(isset($_POST['username'])) {
				$_SESSION['username'] = $_POST['username'];
			}
			#User has not visited session before
			if(!isset($_SESSION['visits'])) {
				$_SESSION['visits'] = 0;
			}
			#Read from session array
			echo "Hello ".$_SESSION['username'].". You have visited this page ".$_SESSION['visits']." times ";
			echo "before.<br />";
			echo "Click <a href=\"content2.php\">here</a> for the next page.<br />";
			
			echo "Click <a href=\"logout.php\">here</a> to logout.";

			$_SESSION['visits']++;
			}
 	?>
	</body>
</html>