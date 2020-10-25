<?php
	$username="";
	$password="";
	$err_username="";
	$err_password="";
	
	$hasError=false;
	
	if(isset($_POST["login"])){
		if(empty($_POST["username"])){
			$err_username="*Username required";
			$hasError = true;
		}
		elseif(strlen($_POST["username"]) < 6){
			$err_username="*Username must be 6 characters long";
			$hasError = true;
		}
		else{
			$username=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_password="*Password required";
			$hasError = true;
		}
		elseif(strlen($_POST["password"]) < 8){
			$err_password="*Password must be 8 characters long";
			$hasError = true;
		}
		else{
			$password=$_POST["password"];
		}
		
		if(!$hasError){
			echo $username ." ".$password;	
		}
		else{
			//echo $err_username . "<br>";
			//echo $err_password . "<br>";
		}
	}
?>
<html>
	<head>
		<title>Login From</title>
	</head>
	<body>
		<h1>Login Form</h1>
		<form action="" method="post">
			<table >
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value="<?php echo $username;?>" placeholder="Write your username">
						<span><?php echo $err_username;?></span>
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input name="password" type="password" value="<?php echo $password;?>" placeholder="Write your password">
						<span><?php echo $err_password;?></span>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<a href="Registration.html" target="_blank">Not registered yet?</a> &nbsp; &nbsp; &nbsp; &nbsp;
						<input type="submit" name="login" value="Login">
					</td>
				</tr>
			</table>
		</form>
	
	</body>
</html>
