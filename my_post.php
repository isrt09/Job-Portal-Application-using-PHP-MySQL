<?php    
   include('db/db_connect.php');
   include_once('header.php');
   include 'functions.php';
   redirect_login();
   $user = user_info();    
?>
<div class="container">
   <h3 align="center">My Post </h3>     
    
    
</div>
<?php 
   include_once('footer.php');
?>