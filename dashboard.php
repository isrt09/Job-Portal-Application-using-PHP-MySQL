<?php   
   include('db/db_connect.php');
   include_once('header.php');
   include 'functions.php';     
   if(!isset($_SESSION['users_id'])){
   		header('location:index.php'); 
   } 
?>
<div class="container">
   <div class="row">
      <h2>Welcome to Dashboard</h2>
      <?php echo $_SESSION['name']; ?>
   </div>
</div>
<?php 
   include_once('footer.php');   
?>
