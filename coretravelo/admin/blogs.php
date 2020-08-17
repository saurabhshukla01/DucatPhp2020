<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<!-- delete Destination code -->
<section id="deletedblog">
   <?php
      // delete Blog Post
      
      if(!empty($_GET['blog_uid']) && !empty($_GET['blog_image']))
      {
         $dblog_uid = $_GET['blog_uid'];
         $dblog_image = $_GET['blog_image'];
         mysqli_query($link,"delete from blogs where blog_uid='$dblog_uid'");
         @unlink("travelo/blog/".$dblog_image);
         $_SESSION['status']="Blog Post Delete Successfully";
         header("location:blogs.php");
         exit();
      }
      ?>
   <script>
      function deleteconfirm()
      {
         if(confirm("Do You Want To Delete Your selected Blog Post ?"))
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
      <section id="places">
         <div class="content-header bg-danger">
            <marquee>
               <h1 class="text-white">Welcome Travelo Popular Blog Posts</h1>
            </marquee>
         </div>
         <h2 class="title">Welcome To Travelo Popular Blog Posts</h2>
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
            <button class="btn btn-primary m-2 p-2" onclick="window.location.href='addblog.php'">Create New Blog Post</button>
            <table id="dataTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>Sr.No.</th>
                     <th>Category Name</th>
                     <th>Blog Image</th>
                     <th>Blog Title</th>
                     <th>Blog Body</th>
                     <th>Blog Post Date</th>
                     <th>Create Date</th>
                     <th colspan="3">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     $sql = "SELECT * FROM blogs order by created_at desc";
                     $sn = 1;
                     if($result = mysqli_query($link, $sql)){
                        while($row=mysqli_fetch_assoc($result)){
                     ?>
                  <tr>
                     <td><?php echo $sn; ?></td>
                     <td><?php echo $row['category_name']; ?></td>
                     <td><img src="travelo/blog/<?php echo $row['blog_image'];?>" style="width:250px;height:175px;"> </td>
                     <td><?php echo $row['blog_title']; ?></td>
                     <td><?php echo $row['blog_desc']; ?></td>
                     <td><?php echo $row['blog_date']; ?></td>
                     <td><?php echo $row['created_at']; ?></td>
                     <td>
                        <span class="btn-group" role="group">
                        <a href="updateblog.php?blog_uid=<?php echo $row['blog_uid']; ?>"><button class="btn btn-sm btn-primary m-1">Edit</button></a>
                        <a href="?blog_uid=<?php echo $row['blog_uid']; ?>&&blog_image=<?php echo $row['blog_image']; ?>"><button class="btn btn-sm btn-danger m-1" onclick="return deleteconfirm()">Delete</button></a>
                        </span>
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