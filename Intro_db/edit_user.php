<h1>Edit user</h1>
<?php
	require_once"db_connect.php";
	$id = $_GET["id"]/39;
	$query = "SELECT * FROM users WHERE id=$id";
	$user = get($query);
	$user = $user[0];
	if(isset($_POST["change"])){
		//$target_dir = "storage/profile_pic/";
		//$target_file = "storage/profile_pic/" . basename($_FILES["profile_pic"]["name"]);
		$fileType = strtolower(pathinfo(basename($_FILES["profile_pic"]["name"]),PATHINFO_EXTENSION));
		$target_file = "storage/profile_pic/" .$id.".$fileType";
		move_uploaded_file($_FILES["profile_pic"]["tmp_name"],$target_file);
		$query = "update users set profile_pic='$target_file' where id=$id";
		execute($query);
		
	}
	
	/*echo $user[0]["user_type"];
	
	$user = $user[0];
	echo $user["username"];*/
?>
<form action="" method="post" enctype="multipart/form-data"> 
	Username : <input type="text" name="edit_username" value="<?php echo $user["username"];?>"> <br>
	Profile Pic: <input type="file" name="profile_pic">
	<input type="submit" value="Change" name="change">
</form>