<?php 
   include('db/db_connect.php');
   include_once('header.php');
   include 'functions.php';
   check_admin_access();   
?>
<?php 
	if(isset($_POST['category'])){
   	  extract($_POST);
   	  save_category($name, $status);
   	  
   }
 ?>
<div class="container">
   <form action="category.php" method="post">
      <div class="form-group">
         <label for="category">Category Name</label>
         <input type="text" name="name" class="form-control" id="category">
      </div>
      <div class="form-group">
      	 <label for="status">Status</label>
      	 <select id="status" class="form-control" name="status">
      	 	 <option value="1">Active</option>
      	 	 <option value="2">InActive</option>
      	 </select>
      </div>           
      <input type="submit" class="btn btn-primary mb-3" value="SAVE" name="category">
   </form>
</div>
<?php 
   include_once('footer.php');
?>