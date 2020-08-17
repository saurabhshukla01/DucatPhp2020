<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div id="main-wrapper">
   <div class="main-content">
      <section id="adddestination">
         <div class="content-header bg-danger">
            <marquee>
               <h1 class="text-white">Welcome Add Travelo Category</h1>
            </marquee>
         </div>
         <?php
            // add Destination
            $errormsg ="";
            extract($_POST);
            if(isset($add_cat))
            {
               $category_uid = uniqid();
               $category_name = trim($category_name);
               
            
               if(!empty($category_name)){
            
                  if(mysqli_query($link,"insert into categories(category_uid,category_name) values('$category_uid','$category_name')"))
                  {
                     $_SESSION['status']="Category Added Successfully";
                     header("location:category.php");
                     exit();
                  }
                  else
                  {
                     $errormsg .= "Category Not added Please Try Again <br>";
                  }
               }
               else{
                  $errormsg .= "Category Must be Required <br>";
               }
               
            }
            
            ?>
         <div class="col-sm-10">
            <h2 class="title">Welcome Add Travelo Category</h2>
            <?php
               if(!empty($errormsg))
               {
               ?>
            <label class="alert-danger p-2"><span class="font-weight-bold m-2"><?php echo $errormsg; ?></span></label>
            <?php
               } 
               ?>
            <form method="POST" enctype="multipart/form-data" class="m-2">
               <div class="form-group">
                  <label for="category_name">Category Name:</label>
                  <input type="text" class="form-control" name="category_name" placeholder="Enter Category Name">
               </div>
               <button type="submit" class="btn btn-primary" name="add_cat">Add Category</button>
            </form>
         </div>
      </section>
   </div>
</div>
</div>