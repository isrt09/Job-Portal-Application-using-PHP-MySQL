<?php 
   include('db/db_connect.php');
   include_once('header.php');
   include 'functions.php';
   check_admin_access();   
?>
<?php 
	$success = '';
	if(isset($_POST['category'])){
   	  extract($_POST);   	  
   	  if(!$name){
   	  	echo "<h2 align='center' class='alert-danger'>Please Input Category Name ....</h2>";
   	  }else{
   	  	$data = check_category($name);
   	  	if($data){   	  		 
   	  	     $success = "This category already exists...!";	
   	  	}else{
   	  		save_category($name, $status);	
   	  		$success = "Category Saved Successfully!";	
   	  	}
   	  	
   	  }   	  
   }

   if(isset($_GET['id'])){
      $category_id = base64_decode($_GET['id']);
      $category = check_category(null,$category_id);      
   }

   if(isset($_POST['update_category'])){      
      extract($_POST);      
      $category_id = base64_decode($_GET['id']); /// !!!!!!!!!!!!!!!!!! NOT WORKING !!!! Need help to fix on it
      category_update($name,$status, $category_id);
   }
    if(isset($_GET['id'])){
       $id = base64_decode($_GET['id']);
       category_delete($id);
    }
 
 ?>
<div class="container">
	<h2 align="center" class="alert-success"><?php echo $success; ?></h2>
   <form action="category.php" method="post">
      <div class="form-group">         
         <label for="category">Category Name</label>         
         <input type="text" name="name" class="form-control" id="category" value="<?php if(isset($category['name'])){echo $category['name'];}?>">
      </div>
      <div class="form-group">
      	  <label for="first_name">Status</label>
             <select class="form-control" name ="status" style="border:1px solid #ccc">
                 <option value='1' <?php if (isset($category['status']) && $category['status']==1){echo 'selected'; }?> >Active</option>
                 <option value='2' <?php if (isset($category['status']) && $category['status']==2){echo 'selected'; }?> >In Active</option>
             </select>
      </div>
      <?php if(isset($_GET['id'])) { ?>           
      <input type="submit" class="btn btn-success mb-3" value="UPDATE" name="update_category">      
      <?php } else{ ?>
      <input type="submit" class="btn btn-primary mb-3" value="SAVE" name="category">      
      <?php } ?>   
      <a href="category_list.php" class="btn btn-warning">Show</a>
   </form>
</div>
<?php 
   include_once('footer.php');
?>