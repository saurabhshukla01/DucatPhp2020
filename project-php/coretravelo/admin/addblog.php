<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div id="main-wrapper">
   <div class="main-content">
      <section id="adddestination">
         <div class="content-header bg-danger">
            <marquee>
               <h1 class="text-white">Welcome Add Travelo Blog Posts</h1>
            </marquee>
         </div>
         <?php 
            $errormsg="";
            $blog_title = $category_name = $blog_date = $blog_desc = $blog_image ="";
            $valid_blog_title = $valid_category_name = $valid_blog_date = $valid_blog_desc = $valid_blog_image = "false";
            
            extract($_POST);
            if(isset($add_blog)){
               $blog_uid=uniqid();
               $blog_title=trim($blog_title);
               $category_name=trim($category_name);
               $blog_date=trim($blog_date);
               $blog_desc=trim($blog_desc);
               $fn = $_FILES['blog_image']['name'];
               $tmp = $_FILES['blog_image']['tmp_name'];
               $arr = explode('.',$fn);
               $ext = end($arr);
            
               if(empty($blog_title)){
                  $errormsg .="<br>Blog Title must be required</br>";
               }
               else{
                  $valid_blog_title="true";
               }
               if(empty($category_name)){
                  $errormsg .="<br>Category Of Blog Post must be required</br>";
               }
               else{
                  $valid_category_name="true";
               }
               if(empty($blog_date)){
                  $errormsg .="<br>Blog Post Date must be required</br>";
               }
               else{
                  $valid_blog_date="true";
               }
               if(empty($blog_desc)){
                  $errormsg .="<br>Blog Description must be required</br>";
               }
               else{
                  $valid_blog_desc="true";
               }
            
               if(!empty($fn) && !empty($blog_title) && !empty($category_name) && !empty($blog_desc) && !empty($blog_date)){
            
                  if($ext=="jpg" || $ext=="jpeg" || $ext=="png")
               {
                  $fnn = rand().$fn;
                  $valid_blog_image="true";
            
                  $sql = "insert into blogs(blog_uid,category_name,blog_title,blog_desc,blog_image,blog_date) values('$blog_uid','$category_name','$blog_title','$blog_desc','$fnn','$blog_date')";
            
                  if(mysqli_query($link,$sql))
                  {
                     move_uploaded_file($tmp,"travelo/blog/".$fnn);
                     //$errormsg .= "Blog Post Added Successfully <br>";
                     $_SESSION['status']="Blog Post Added Successfully";
                     header("location:blogs.php");
                     exit();
                  }
                  else{
                     $errormsg .="<br> Data Not Inserted Please Check <br>";
                  }
            
               }
               else
               {
                  $errormsg .= "<br> Image Type Only Jpg, png, jpeg file allowed <br>";
               }
            
               }
               else{
                  $errormsg .="<br>All filed && Blog Image must be required</br>";
               }
               
            
            }
            
            ?>
         <div class="col-sm-10">
            <h2 class="title">Welcome Add Travelo Blog Posts</h2>
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
                  <label for="blog_title">Blog Title :</label>
                  <input type="text" class="form-control" name="blog_title" placeholder="Enter Blog Title">
               </div>
               <div class="form-group">
                  <label for="category_name">Please Select Category From Blog Post :</label>
                  <select name="category_name" class="form-control">
                     <option value="" disabled selected>Choose Category For Blog Post</option>
                     <?php 
                        if($result = mysqli_query($link,"select * from categories")){
                           while($row=mysqli_fetch_assoc($result)){
                        ?>
                     <option value="<?php echo $row['category_name']; ?>">
                        <?php echo $row['category_name']; ?>
                     </option>
                     <?php 
                        }
                        }
                        ?>
                  </select>
               </div>
               <div class="form-group">
                  <label for="blog_date">Blog Date Post :</label>
                  <input type="text" class="form-control" name="blog_date" placeholder="Enter Blog Date (Ex: Jan 15 , 2020)">
               </div>
               <div class="form-group">
                  <label for="blog_desc">Blog Post Description :</label>
                  <textarea class="form-control" name="blog_desc" placeholder="Please Enter Description for Blog Post" rows="10" cols="80"></textarea>
               </div>
               <div class="form-group">
                  <label for="blog_image">Blog Post Image :</label>
                  <input type="file" class="form-control" name="blog_image" placeholder="Upload Image">
               </div>
               <button type="submit" class="btn btn-primary" name="add_blog">Add Blog Post</button>
            </form>
         </div>
      </section>
   </div>
</div>
</div>