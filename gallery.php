<?php    
   include('db/db_connect.php');
   include_once('header.php');
   include 'functions.php';
   $photo_error = '';
           
?>
<div class="container">
   <h3 align="center">Photo Gallery </h3>      
   <form action="gallery.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
         <label for="photo_name">PHOTO</label>
         <input type="file" name="photo_name" class="form-control" id="photo_name" value="<?php if(isset($photo_name)) { echo $photo_name;} ?>">
         <span style="color: red;"><?php echo $photo_error; ?></span>
      </div>          
      <button type="submit" class="btn btn-success mb-5" name="save">UPLOAD</button>
   </form>
</div>
<?php 
   include_once('footer.php');
?>