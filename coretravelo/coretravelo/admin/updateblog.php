<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div id="main-wrapper">
   <div class="main-content">
      <section id="adddestination">
         <div class="content-header bg-danger">
            <marquee>
               <h1 class="text-white">Welcome Update Travelo Blog Posts</h1>
            </marquee>
         </div>
         <?php 
            $errormsg="";
            $blog_uid = $_GET['blog_uid'];
            // get Blog Post by uid
            $select_data = mysqli_query($link,"select * from blogs where blog_uid='$blog_uid'");
            $arr =mysqli_fetch_assoc($select_data);
            $oldimage = $arr['blog_image'];
            
            // update Blog Post
            extract($_POST);
            
            if(isset($edit_blog))
            {
            $fn = $_FILES['blog_image']['name'];
            $tmp = $_FILES['blog_image']['tmp_name'];
            
            if(empty($fn) && !empty($blog_title) && !empty($category_name) && !empty($blog_date) && !empty($blog_desc))
            {
               // update data with all fields in Blog Table
               if(mysqli_query($link,"update blogs set blog_title='$blog_title',category_name='$category_name',blog_desc='$blog_desc',blog_date='$blog_date' where blog_uid='$blog_uid'"))
               {
                  $_SESSION['status']="Blog Post Update Successfully";
                  header("location:blogs.php");
                  exit();
               }
               else
               {
                  $errormsg = "<br> Not Update Data All Fields Must Be Required Please Check again <br>";
               }
            }
            else
            {
               // update Blog Post Data and image
            
            
               $arr2 = explode('.',$fn);
               $ext = end($arr2);
            
               if($ext=="jpg" || $ext=="jpeg" || $ext=="png")
               {
                  $fnn = rand().$fn;
                  if(mysqli_query($link,"update blogs set blog_title='$blog_title',category_name='$category_name',blog_desc='$blog_desc',blog_date='$blog_date',blog_image='$fnn' where blog_uid='$blog_uid'"))
                  {
                     move_uploaded_file($tmp,"travelo/blog/".$fnn);
                     unlink("travelo/blog/".$oldimage);
                     $_SESSION['status']="Blog Post Update Successfully";
                     header("location:blogs.php");
                     exit();
                  }
                  else
                  {
                     $errormsg = "Place Already Exist";
                  }
               }
               else
               {
                  $errormsg = "All Field And Image Cannot be Empty && Only Jpg , png or Jpeg Allowed";
               }
            
            }
            }
            ?>
         <div class="col-sm-10">
            <h2 class="title">Welcome Update Travelo Blog Posts</h2>
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
                  <input type="text" class="form-control" name="blog_title" value="<?php echo $arr['blog_title']; ?>">
               </div>
               <div class="form-group">
                  <label for="category_name">Please Select Category From Blog Post :</label>
                  <select name="category_name" class="form-control">
                     <?php
                        if($result = mysqli_query($link,"select * from categories")){
                           while($row=mysqli_fetch_assoc($result)){
                        ?>
                     <?php if($row['category_name'] == $arr['category_name']){ ?>
                     <option value="<?php echo $arr['category_name']; ?>" selected><?php echo $arr['category_name']; ?></option>
                     <?php }else{ ?>
                     <option value="<?php echo $row['category_name']; ?>">
                        <?php echo $row['category_name']; ?>
                     </option>
                     <?php }?>
                     <?php
                        }
                        }
                        ?>
                  </select>
               </div>
               <div class="form-group">
                  <label for="blog_date">Blog Date Post :</label>
                  <input type="text" class="form-control" name="blog_date" value="<?php echo $arr['blog_date']; ?>">
               </div>
               <div class="form-group">
                  <label for="blog_desc">Blog Post Description :</label>
                  <textarea type="text" class="form-control" name="blog_desc" rows="10" cols="80"><?php echo $arr['blog_desc']; ?></textarea>
               </div>
               <div class="form-group">
                  <label for="blog_image">Blog Post Image :</label>
                  <input type="file" class="form-control" name="blog_image" placeholder="Upload Image">
                  <div class="m-2 p-2 pull-right">
                     <img src="travelo/blog/<?php echo $arr['blog_image'];?>" style="width:300px;height:150px;">
                     <p class="text-danger">Image Name : <?php echo $arr['blog_image'];?></p>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary" name="edit_blog">Update Blog Post</button>
            </form>
         </div>
      </section>
   </div>
</div>
</div>