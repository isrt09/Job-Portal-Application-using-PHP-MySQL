<?php
	include('db/db_connect.php'); 	
	function checkdata($data){
		$trim_data 			= trim($data);
		$stripslashes_data  = stripcslashes($trim_data);
		$main_data 			= htmlspecialchars($stripslashes_data);
		return $main_data;
	}

	function checkemail($email){
		global $con;
		$sql   = "SELECT * tbl_users WHERE email = '$email'";
		$query = mysqli_query($con,$sql);
		$result = mysqli_fetch_assoc($query);
		return $result;
	}
 ?>