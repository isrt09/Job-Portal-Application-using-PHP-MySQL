<?php
   
   include('db/db_connect.php');
   include_once('header.php');
   include 'functions.php';
   redirect_dashboard();
   $email_error    = '';
   $mobile_error   = '';
   $message        ='';
   if(isset($_POST['login'])){
      extract($_POST);     
      $submit = true;
      if(!$mobile){
         $mobile_error = 'Please Enter Your Mobile...'; 
         $submit = false;
      }elseif($mobile && (strlen($mobile))){
          $mobile_error = 'Please Correct Your Mobile Number ...'; 
          $submit = false;
      }
      
      if(!$email){
         $email_error = 'Please Enter Your E-Mail Address...'; 
         $submit = false;
      }

      if($email && $mobile){                    
          login($email, $mobile);          
      }
   }
?>

<div class="container">
   <h3 align="center">Login Form </h3>
   <?php if($message) { ?>
        <h4 align="center" style="color: green;"> <?php echo $message; ?></h4>
   <?php } ?>    
   <form action="login.php" method="post">      
       <div class="form-group">
         <label for="email">Email</label>
         <input type="email" name="email" class="form-control" id="email" value="<?php if(isset($email)) { echo $email;} ?>">
        <span style="color: red;"><?php echo $email_error; ?></span>
      </div>
      <div class="form-group">
         <label for="mobile">Mobile:</label>
         <input type="text" class="form-control" id="mobile" name="mobile" value="<?php if(isset($mobile)) { echo $mobile;} ?>" >
         <span style="color: red;"><?php echo $mobile_error; ?></span>
      </div>        
      <button type="submit" class="btn btn-primary mb-5" name="login">Login</button>
   </form>
</div>
<?php 
   include_once('footer.php');
?>