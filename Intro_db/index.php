<?php
	require_once "db_connect.php";
	$p="1646456xc4xgf6ttytyhdflgjrtr4646";
	$p=md5($p);
	echo $p;
	//mysqli_query($conn,"INSERT INTO users VALUES(null,'Karim','12345','user')");
	
	$query = "SELECT * FROM users";
	$users = get($query);
	/*echo "<pre>";
	print_r($users);
	echo "</pre>";*/
	
	if(count($users)>0){
		echo '<table border="1" style="border-collapse:collapse;"> ';
		echo "<tr>";
		echo "<th></th>";
		echo "<th> Username</td>";
		echo "<th> Password</td>";
		echo "<th> Type</td>";
		echo "<th colspan='2'> Options</th>";
		echo "</tr>";
		
			/*for($i=0;$i<count($users);$i++){
				//$user = $users[$i];
				echo "<tr>";
				echo "<td>".$users[$i]["username"]."</td>";
				echo "<td>".$users[$i]["password"]."</td>";
				echo "<td>".$users[$i]["user_type"]."</td>";
				echo "</tr>";
			}*/
		
		foreach($users as $user){
			echo "<tr>";
				echo "<td><img width='50px' height='50px' src='".$user["profile_pic"]."'><td>";
				echo "<td>".$user["username"]."</td>";
				echo "<td>".$user["password"]."</td>";
				echo "<td>".$user["user_type"]."</td>";
				echo "<td><a href='edit_user.php?id=".($user["id"]*39)."'>Edit</a></td>";
				echo "<td><a href=''>Delete</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}else{
		echo "No data found";
	}
	
		
	
	
	
	
	
?>