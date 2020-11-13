<?php
	include('db/db_connect.php');
	//echo "<pre>";
	//print_r($_POST);
	extract($_POST);	
	$sql = "INSERT INTO tbl_users(first_name,middle_name,last_name,mobile,email,password) VALUES('$first_name','$middle_name','$last_name','$mobile','$email','$password')";
	$result = mysqli_query($con, $sql);
	if($result){
		echo "Data Saved Successfully!";
	}else{
		echo "Failed Data Saved into Database";
	}
	
 ?>