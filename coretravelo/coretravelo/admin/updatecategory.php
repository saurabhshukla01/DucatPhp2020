<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div id="main-wrapper">
   <div class="main-content">
      <section id="update_destination">
         <div class="content-header bg-danger">
            <marquee>
               <h1 class="text-white">Welcome Update Travelo Categories</h1>
            </marquee>
         </div>
         <?php
            $errormsg ="";
            $category_uid = $_GET['category_uid'];
            // get Category by uid
            $select_data = mysqli_query($link,"select * from categories where category_uid='$category_uid'");
            $arr =mysqli_fetch_assoc($select_data);
            
            // update Category
            extract($_POST);
            
            if(isset($edit_cat))
            {
            
               if(!empty($category_name))
               {
                  // update only Category
                  if(mysqli_query($link,"update categories set category_name='$category_name' where category_uid='$category_uid'"))
                  {
                     $_SESSION['status']="Category Update Successfully";
                     header("location:category.php");
                     exit();
                  }
                  else
                  {
                     $errormsg .= "<br>Not update category Please Try again<br>";
                  }
               }
               else
               {
                  $errormsg .= "<br>Category Must Be Required<br>";
               }
            }
            ?>
         <div class="col-sm-10">
            <h2 class="title">Welcome Update Travelo Destinations</h2>
            <?php
               if(!empty($errormsg))
               {
               ?>
            <label class="alert-danger p-2"><span class="font-weight-bold m-2"><?php echo $errormsg; ?></span></label>
            <?php
               } 
               ?>
            <form method="POST" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="category_name">Category Name:</label>
                  <input type="text" class="form-control" name="category_name" value="<?php echo @$arr['category_name']; ?>" placeholder="Enter Category Name">
               </div>
               <button type="submit" class="btn btn-primary" name="edit_cat">Update Category</button>
            </form>
         </div>
      </section>
   </div>
</div>
</div>