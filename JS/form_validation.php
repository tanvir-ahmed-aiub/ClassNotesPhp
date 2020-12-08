<?php
	if(isset($_POST["submit"])){
		echo "Form Submitted";
	}
?>
<html>
	<head></head>
	<body>
		<form method="post" onsubmit="return validate()" action="">
			<input type="text" id="name" placeholder="Name"><span id="err_name"></span><br>
			<input type="text" id="email" placeholder="Email"><span id="err_email"></span><br>
			<input type="text" id="username" placeholder="Username"><span id="err_username"></span><br>
			<input type="submit" value="submit" name="submit">
		</form>
		<script src="js/register.js">
			
		</script>
	</body>
</html>