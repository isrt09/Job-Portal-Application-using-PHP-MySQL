<?php    
   include('db/db_connect.php');
   include_once('header.php');
   include 'functions.php';
   redirect_login();
   $user = user_info();
    echo '<pre>';
    print_r($_SESSION);
?>
<div class="container">
   <h3 align="center">User Profile </h3>     
    <table class="table table-bordered table-striped">
       <tr>
          <th>First Name</th>
          <td><?php echo $user['first_name']; ?></td>
       </tr>
       <tr>
          <th>Middle Name</th>
          <td><?php echo $user['middle_name']; ?></td>
       </tr>
       <tr>
          <th>Last Name</th>
          <td><?php echo $user['last_name']; ?></td>
       </tr>
       <tr>
          <th>Email Address</th>
          <td><?php echo $user['email']; ?></td>
       </tr>
       <tr>
          <th>Mobile Number</th>
          <td><?php echo $user['mobile']; ?></td>
       </tr>      
    </table>
    <a href="profile_edit.php" class="btn btn-primary mb-5">EDIT</a>
</div>
<?php 
   include_once('footer.php');
?>