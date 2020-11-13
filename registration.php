<?php 
   require_once('header.php');
?>
<div class="container">
   <form action="registration_save.php" method="post">
      <div class="form-group">
         <label for="first_name">First Name</label>
         <input type="text" name="first_name" class="form-control" id="first_name">
      </div>
       <div class="form-group">
         <label for="middle_name">Middle Name</label>
         <input type="text" name="middle_name" class="form-control" id="middle_name">
      </div>
       <div class="form-group">
         <label for="last_name">Last Name</label>
         <input type="text" name="last_name" class="form-control" id="last_name">
      </div>
       <div class="form-group">
         <label for="mobile">Mobile</label>
         <input type="text" name="mobile" class="form-control" id="mobile">
      </div>
       <div class="form-group">
         <label for="email">Email</label>
         <input type="email" name="email" class="form-control" id="email">
      </div>
      <div class="form-group">
         <label for="pwd">Password:</label>
         <input type="password" class="form-control" id="pwd" name="password">
      </div>
      <div class="form-group">
         <label for="confirm_password">Confirm Password:</label>
         <input type="password" class="form-control" name="confirm_password" id="confirm_password">
      </div>     
      <button type="submit" class="btn btn-info mb-5">Submit</button>
   </form>
</div>
<?php 
   include_once('footer.php');
?>