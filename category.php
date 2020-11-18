<?php 
   include('db/db_connect.php');
   include_once('header.php');
   include 'functions.php';
   check_admin_access();

?>
<div class="container">
   <form action="category.php" method="post">
      <div class="form-group">
         <label for="category">Category Name</label>
         <input type="text" name="category" class="form-control" id="category">
      </div>          
      <button type="submit" class="btn btn-info mb-5">Save</button>
   </form>
</div>
<?php 
   include_once('footer.php');
?>