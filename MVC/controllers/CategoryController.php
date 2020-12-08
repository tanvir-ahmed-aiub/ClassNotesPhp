<?php
	require_once 'models/db_connect.php';
	function getAllCategroies(){
		$query = "SELECT * FROM categories";
		$result = get($query);
		return $result;
	}
?>