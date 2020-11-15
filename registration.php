<?php 
   include('db/db_connect.php');
   include_once('header.php');
   include 'functions.php';
   
   $first_name_error 	= '';	
   $middle_name_error 	= '';	
   $last_name_error 	   = '';	
   $mobile_error 		   = '';	
   $email_error 		   = '';	
   $password_error 		= '';	
   $confirm_pass_error  = '';
   $success             = '';

   if(isset($_POST['save'])){
      extract($_POST);
      $first_name       = checkdata($first_name);
      $middle_name      = checkdata($middle_name);
      $last_name        = checkdata($last_name);
      $email            = checkdata($email);
      $mobile           = checkdata($mobile);
      $password         = checkdata($password);
      $confirm_password = checkdata($confirm_password);

      if(!$first_name){
         $first_name_error = 'First Name Required';
         $submit = false;
      }
      if(!$middle_name){
         $middle_name_error = 'Middle Name Required';
         $submit = false;
      }
      if(!$last_name){
         $last_name_error = 'Last Name Required';
          $submit = false;
      }
       if(!$email){
          $email_error = 'Email is requierd'; 
          $submit = false;     
      }elseif($email && !filter_var($email,FILTER_VALIDATE_EMAIL)){
          $email_error = 'Provide Valid Email';
          $submit = false;  
      }elseif($email && filter_var($email,FILTER_VALIDATE_EMAIL)){
           $is_exist = checkemail($email);
           if($is_exist){
               $email_error = 'This Email Already exists!!';
               $submit = false; 
           }           
      }
      if(!$mobile){
         $mobile_error = 'Mobile Required';
          $submit = false;
      }
      if(!$password){
         $password_error = 'Password Required';
         $submit = false;
      }else if($password && (strlen($password)<5)){
         $password_error = 'Password must be greater than five characters...';
         $submit = false;
      }
      if(!$confirm_password){
         $confirm_pass_error = 'Confirm Password Required';
         $submit = false;
      }
      if($password && $confirm_password && ($password != $confirm_password)){
         $confirm_pass_error = 'Password not matched...';
          $submit = false;
      }

      if($first_name && $middle_name && $last_name && $email && $mobile && $password && $confirm_password){
      $md5 = md5($password);
      $sql = "INSERT INTO tbl_users(first_name,middle_name,last_name,mobile,email,password) VALUES('$first_name','$middle_name','$last_name','$mobile','$email','$md5')";
      
      $result = mysqli_query($con, $sql);
         if($result){
            $success = "Data Saved Successfully!";            
         }else{
            $fail    = "Failed Data Saved into Database";
         }
      }      
   }         
?>
<div class="container">
   <h3 align="center">Registration Form </h3>
   <?php if($success) { ?>
   <h4 align="center" style="color: green;"> <?php echo $success; ?></h4>
   <?php } ?>
   <form action="registration.php" method="post">
      <div class="form-group">
         <label for="first_name">First Name</label>
         <input type="text" name="first_name" class="form-control" id="first_name" value="<?php if(isset($first_name)) { echo $first_name;} ?>">
         <span style="color: red;"><?php echo $first_name_error; ?></span>
      </div>
       <div class="form-group">
         <label for="middle_name">Middle Name</label>
         <input type="text" name="middle_name" class="form-control" id="middle_name" value="<?php if(isset($middle_name)) { echo $middle_name;} ?>" >
         <span style="color: red;"><?php echo $middle_name_error; ?></span>
      </div>
       <div class="form-group">
         <label for="last_name">Last Name</label>
         <input type="text" name="last_name" class="form-control" id="last_name" value="<?php if(isset($last_name)) { echo $last_name;} ?>" >
         <span style="color: red;"><?php echo $last_name_error; ?></span>
      </div>
       <div class="form-group">
         <label for="mobile">Mobile</label>
         <input type="text" name="mobile" class="form-control" id="mobile" value="<?php if(isset($mobile)) { echo $mobile;} ?>">
         <span style="color: red;"><?php echo $mobile_error; ?></span>
      </div>
       <div class="form-group">
         <label for="email">Email</label>
         <input type="email" name="email" class="form-control" id="email" value="<?php if(isset($email)) { echo $email;} ?>">
          <span style="color: red;"><?php echo $email_error; ?></span>
      </div>
      <div class="form-group">
         <label for="pwd">Password:</label>
         <input type="password" class="form-control" id="pwd" name="password" >
          <span style="color: red;"><?php echo $password_error; ?></span>
      </div>
      <div class="form-group">
         <label for="confirm_password">Confirm Password:</label>
         <input type="password" class="form-control" name="confirm_password" id="confirm_password" >
         <span style="color: red;"><?php echo $confirm_pass_error; ?></span>
      </div>     
      <button type="submit" class="btn btn-info mb-5" name="save">Submit</button>
   </form>
</div>
<?php 
   include_once('footer.php');
?>