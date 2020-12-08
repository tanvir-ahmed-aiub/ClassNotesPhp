<?php
	require_once 'models/db_connect.php';
	$name="";
	$err_name="";
	//other fields to validate
	$hasError=false;
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$err_name="*Username Required";
			$hasError = true;
		}else{
			$name= $_POST["name"];
		}
		
		//
		if(!$hasError){
			//dataentry
			addUser($name,$_POST["username"],$_POST["email"],$_POST["password"]);
			header("Location: login.php");
		}
	}
	elseif(isset($_POST["login"])){
		if(!$hasError){
			$result = authenticate($_POST["username"],$_POST["password"]);
			if($result){
				header("Location: dashboard.php");
			}
			else{
				echo "Invalid Username or Password";
			}
		}
	}
	function addUser($name,$username,$email,$password)
	{
		$password = md5($password);
		$query= "INSERT INTO users VALUES ('$name','$username','$email','$password')";
		execute($query);	
	}
	function authenticate($username,$password){
		$password = md5($password);
		$query = "SELECT username FROM users WHERE username='$username' AND password='$password'";
		$result = get($query);
		if(count($result) > 0) return true;
		//if(count($result) > 0) return $result;
		return false;
	}
	
?>