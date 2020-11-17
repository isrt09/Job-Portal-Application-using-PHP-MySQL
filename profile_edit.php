<?php    
   include('db/db_connect.php');
   include_once('header.php');
   include 'functions.php';
   $user = user_info();
   $first_name_error   = ''; 
   $middle_name_error   = ''; 
   $last_name_error      = '';  
   $mobile_error       = '';  
   $email_error        = '';  
   $password_error    = ''; 
   $confirm_pass_error  = '';
   $success             = '';
            
?>
<div class="container">
   <h3 align="center">User Profile </h3>      
   <form action="registration.php" method="post">
      <div class="form-group">
         <label for="first_name">First Name</label>
         <input type="text" name="first_name" class="form-control" id="first_name" value="<?php if(isset($user)) { echo $user['first_name'];} ?>">
         <span style="color: red;"><?php echo $first_name_error; ?></span>
      </div>
       <div class="form-group">
         <label for="middle_name">Middle Name</label>
         <input type="text" name="middle_name" class="form-control" id="middle_name" value="<?php if(isset($user)) { echo $user['middle_name'];} ?>" >
         <span style="color: red;"><?php echo $middle_name_error; ?></span>
      </div>
       <div class="form-group">
         <label for="last_name">Last Name</label>
         <input type="text" name="last_name" class="form-control" id="last_name" value="<?php if(isset($user)) { echo $user['last_name'];} ?>" >
         <span style="color: red;"><?php echo $last_name_error; ?></span>
      </div>
       <div class="form-group">
         <label for="mobile">Mobile</label>
         <input type="text" name="mobile" class="form-control" id="mobile" value="<?php if(isset($user)) { echo $user['mobile'];} ?>">
         <span style="color: red;"><?php echo $mobile_error; ?></span>
      </div>
       <div class="form-group">
         <label for="email">Email</label>
         <input type="email" name="email" class="form-control" id="email" value="<?php if(isset($user)) { echo $user['email'];} ?>">
          <span style="color: red;"><?php echo $email_error; ?></span>
      </div>          
      <button type="submit" class="btn btn-info mb-5" name="update">Update</button>
   </form>
</div>
<?php 
   include_once('footer.php');
?>