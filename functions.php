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
		$sql    = "select * from tbl_users where email='$email'";
		$query  = mysqli_query($con,$sql);
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
			$_SESSION['name']     = $row['first_name'];			
			$_SESSION['user_type_id']     = $row['user_type_id'];			
			header('location:dashboard.php');
		}else{
			$message = "LOGIN FAILED";
		}
		return $row;
	}

	function redirect_dashboard(){
		if(isset($_SESSION['users_id'])){
			header('location:dashboard.php');
		}
	}

	function redirect_login(){
		if(!isset($_SESSION['users_id'])){
			header('location:login.php');
		}
	}

	function user_info(){
		global $con;
		$user_id = $_SESSION['users_id'];
		$sql     = "select * from tbl_users where users_id='$user_id'";
		$query   = mysqli_query($con, $sql);
		$result  = mysqli_fetch_assoc($query);
		return $result;
	}

	function check_admin_access(){
		if($_SESSION['user_type_id'] !=1){
			header('location:forbidden.php');
		}
	}

	function save_category($name, $status){
		global $con;
		$user_id = $_SESSION['users_id'];
		$date = date('Y-m-d');
		$sql  = "insert into category(name, status, created_by, created_at) values('$name','$status','$user_id','$date')";
		$result   = mysqli_query($con, $sql);		
		return $result;
	}

	function check_category($name){
		global $con;
		$sql   = "SELECT * from category WHERE name = '$name'";
		$query = mysqli_query($con,$sql);
		$row   = mysqli_fetch_assoc($query);
		return $row;
	}

	function get_all_category(){
		global $con;
		$sql   = "SELECT category.*, tbl_status.name as category_name FROM category JOIN tbl_status ON category.status = tbl_status.id";
		$result = mysqli_query($con,$sql);		
		return $result;
	}
 ?>