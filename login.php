<?php 
   include('db/db_connect.php');
   include_once('header.php');
   include 'functions.php';
   $email_address_error = '';
   $password_error      ='';
   if(isset($_POST['login'])){
      extract($_POST);
      if(!$password){
         $password_error = "Please Enter Your Password ....";
         $submit = false;
      }
      if(!$email_address){
         $email_address_error = "Please Enter Your E-Mail ....";
         $submit = false;
      }
   }   
  ?>
<div class="container">
   <h3 align="center">LOGIN </h3>  
   <form action="login.php" method="post">
      <div class="form-group">
         <label for="email_address">Email Address</label>
         <input type="email" name="email_address" class="form-control" id="email_address" value="">
         <span style="color: red;"><?php echo $email_address_error; ?></span> 
      </div>
      <div class="form-group">
         <label for="password">Password</label>
         <input type="password" name="password" class="form-control" id="password" value=""> 
         <span style="color: red;"><?php echo $password_error; ?></span>
      </div>     
      <button type="submit" class="btn btn-primary mb-5" name="login">Submit</button>
   </form>
</div>
<?php 
   include_once('footer.php');
?>