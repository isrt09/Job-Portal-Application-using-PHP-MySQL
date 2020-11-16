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
		$sql   = "select * from tbl_users where email='$email'";
		$query = mysqli_query($con,$sql);
		$result = mysqli_fetch_assoc($query);
		return $result;
	}

	function login($email, $mobile){
		global $con;		
		$sql   = "select * from tbl_users where email='$email' AND mobile='$mobile'";		
		$query = mysqli_query($con, $sql);
		$row   = mysqli_fetch_assoc($query);
		if($row){
			$_SESSION['users_id'] = $row['users_id'];			
			$_SESSION['name'] = $row['first_name'];			
			header('location:dashboard.php');
		}else{
			$message = "LOGIN FAILED";
		}
		return $row;
	}
 ?>