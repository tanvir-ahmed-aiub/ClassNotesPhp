<?php 
	//session_start();
	if(!isset($_COOKIE["username"])){
		header("Location: index.php");
	}
?>
<h1>Welcome <?php //echo $_SESSION["username"];
				echo $_COOKIE["username"];
?></h1>