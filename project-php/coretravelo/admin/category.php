<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<!-- delete Category code -->
<section id="deletecategory">
   <?php
      // delete Category
      
      if(!empty($_GET['category_uid']))
      {
         $dcategory_uid = $_GET['category_uid'];
         mysqli_query($link,"delete from categories where category_uid='$dcategory_uid'");
         $_SESSION['status']="Category Delete Successfully";
         header("location:category.php");
         exit();
      }
      ?>
   <script>
      function deleteconfirm()
      {
         if(confirm("Do You Want To Delete Your selected Category ?"))
         {
            return true;
         }
         else
         {
            return false;
         }
      }
   </script>
</section>
<div id="main-wrapper">
   <div class="main-content">
      <section id="category">
         <div class="content-header bg-danger">
            <marquee>
               <h1 class="text-white">Welcome Category Travelo</h1>
            </marquee>
         </div>
         <h2 class="title">Welcome To Category Travelo</h2>
         <div class="alert-danger">
            <?php
               if(!empty($_SESSION['status']))
                  {
               ?>
            <label class="p-2"><span class="font-weight-bold m-2"><?php echo $_SESSION['status']; ?></span></label>
            <?php
               }
               unset($_SESSION['status']);
               ?>
         </div>
         <div class="section-content">
            <button class="btn btn-primary pull-right m-2 p-2" onclick="window.location.href='addcategory.php'">Create New Category</button>
            <table id="dataTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>Sr.No.</th>
                     <th>Category UID</th>
                     <th>Category Name</th>
                     <th>Create Date</th>
                     <th colspan="3">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     $sql = "SELECT * FROM categories order by created_at desc";
                     $sn = 1;
                     if($result = mysqli_query($link, $sql)){
                        while($row=mysqli_fetch_assoc($result)){
                     ?>
                  <tr>
                     <td><?php echo $sn; ?></td>
                     <td><?php echo $row['category_uid']; ?></td>
                     <td><?php echo $row['category_name']; ?></td>
                     <td><?php echo $row['created_at'];?></td>
                     <td>
                        <a href="updatecategory.php?category_uid=<?php echo $row['category_uid'];?>"><button class="btn btn-sm btn-primary">Edit</button></a>
                        <a href="?category_uid=<?php echo $row['category_uid']?>"><button class="btn btn-sm btn-danger" onclick="return deleteconfirm()">Delete</button></a>
                     </td>
                  </tr>
                  <?php 
                     $sn++;
                        }
                     }
                     ?>
               </tbody>
            </table>
         </div>
         <?php include('footer.php'); ?>
      </section>
   </div>
</div>
</div>