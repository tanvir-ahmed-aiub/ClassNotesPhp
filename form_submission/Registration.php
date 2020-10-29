<?php

	$gender="";
	$err_gender="";
	$hobbies="";
	$err_hobbies="";
	$profession="";
	$err_profession="";
	$name="";
	$err_name="";
	
	$has_error = false;
	
	if(isset($_POST["register"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$has_error = true;
		}elseif(strpos($_POST["name"],"abcd")){
			$err_name="Consequtive abcd cant not be a name";
			$has_error = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["hobbies"])){
			$err_hobbies = "Atleast select 1 hobby";
			$has_error = true;
		}
		else{
			$hobbies=$_POST["hobbies"];
		}
		
		if(!$has_error){
			echo $name;
		}
	}
	
?>
<html>
	<head>
		<title>Registation</title>
	</head>
	<body>
		
		<hr>
		<form action="" method="post">
			<fieldset>
				<legend>Registration Form</legend>
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name"> <?php echo $err_name;?></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td>Gender: <?php echo $err_gender;?></td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
						</td>
					</tr>
					<tr>
						<td>Hobbies:  <?php echo $err_hobbies;?></td>
						<td>
							<input type="checkbox" name="hobbies[]" value="Movies"> Movies<br>
							<input type="checkbox" name="hobbies[]" value="Music"> Music <br>
							<input type="checkbox" name="hobbies[]" value="Programming"> Programming<br>
							<input type="checkbox" name="hobbies[]" value="Travelling"> Travelling <br>
							<input type="checkbox" name="hobbies[]" value="Adventure"> Adventure<br>
							<input type="checkbox" name="hobbies[]" value="Gradenning"> Gardenning<br>
						</td>
					</tr>
					
					<tr>
						<td>Profession:</td>
						<td>
							<select name="profession">
								<option disabled selected>Choose</option>
								<option >Teacher</option>
								<option >Student</option>
								<option >Business</option>						
							</select>
						</td>
					</tr>
					<tr>
						<td>Bio:</td>
						<td>
							<textarea name="io" ></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="register" value="register"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>
