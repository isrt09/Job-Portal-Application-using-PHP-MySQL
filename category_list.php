<?php 
   include('db/db_connect.php');
   include_once('header.php');
   include 'functions.php';
   check_admin_access();    
?>
<div class="container">
   <div class="row">
      <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #4CAF50;
          color: white;
        }
      </style>
      <table id="customers" class="table table-bordered mb-3">
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">Category Name</th>
          <th class="text-center">Category Status</th>
          <th class="text-center">Created At</th>
          <th class="text-center">Action</th>
        </tr>        
            <?php
                $data = get_all_category();
                $id = 1; 
                while($row = mysqli_fetch_assoc($data)){                  
             ?>
             <tr>
                <td class="text-center" ><?php echo $id++; ?></td>
                <td class="text-center" ><?php echo $row['name']; ?></td>
                <td class="text-center" ><?php echo $row['category_name']; ?></td>
                <td class="text-center" ><?php echo $row['created_at']; ?></td>
                <td class="text-center">
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-info">View</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>                
           <?php } ?>  
        </tr>        
      </table>
   </div>
</div>
<?php 
   include_once('footer.php');
?>