<html>
	<head></head>
	<body>
		<h1>Login Form Submitted</h1>
		<?php
		    $username = $_REQUEST["username"];
			echo "Username : ". $username ."<br>" ;
			echo "Password : ". $_POST["password"]."<br>" ;
		?>
	</body>
</html>
