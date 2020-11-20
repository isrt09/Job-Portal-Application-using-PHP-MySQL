<?php    
   include('db/db_connect.php');
   include_once('header.php');
   include 'functions.php';
   redirect_login();
   $user = user_info();    
?>
<div class="container">
   <h3 align="center">Add New Post </h3>     
    <form action="new_post.php" action="post">
      <div class="form-group">         
         <label for="title">Title</label>         
         <input type="text" name="title" class="form-control" id="title" value="">
      </div>
      <div class="form-group">         
         <label for="short_description">Short Description</label>         
         <input type="text" name="short_description" class="form-control" id="short_description" value="">
      </div>      
      <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
      <input type="submit" class="btn btn-primary " name="post">
    </form>    
</div>
<?php 
   include_once('footer.php');
?>