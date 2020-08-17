<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div id="main-wrapper">
   <div class="main-content">
      <section id="update_destination">
         <div class="content-header bg-danger">
            <marquee><h1 class="text-white">Welcome Update Travelo Destinations</h1></marquee>
         </div>
         <?php
            $errormsg ="";
            $des_uid = $_GET['des_uid'];
            // get Destination by uid
            $select_data = mysqli_query($link,"select * from destinations where des_uid='$des_uid'");
            $arr =mysqli_fetch_assoc($select_data);
            $oldimage = $arr['des_image'];
            
            // update Destination
            extract($_POST);
            
            if(isset($edit_dest))
            {
            $fn = $_FILES['des_image']['name'];
            $tmp = $_FILES['des_image']['tmp_name'];
            
            if(empty($fn) && !empty($des_name))
            {
               // update only cname
               if(mysqli_query($link,"update destinations set des_name='$des_name' where des_uid='$des_uid'"))
               {
                  $_SESSION['status']="Destination Update Successfully";
                  header("location:destination.php");
                  exit();
               }
               else
               {
                  $errormsg .= "Destination Already Exist";
               }
            }
            else
            {
               // update Destination and image
            
            
               $arr2 = explode('.',$fn);
               $ext = end($arr2);
            
               if($ext=="jpg" || $ext=="jpeg" || $ext=="png")
               {
                  $fnn = rand().$fn;
                  if(mysqli_query($link,"update destinations set des_name='$des_name',des_image='$fnn' where des_uid='$des_uid'"))
                  {
                     move_uploaded_file(  $tmp,"travelo/destination/".$fnn);
                     unlink("travelo/destination/".$oldimage);
                     $_SESSION['status']="Destination Update Successfully";
                     header("location:destination.php");
                     exit();
                  }
                  else
                  {
                     $errormsg .= "Destination Already Exist";
                  }
               }
               else
               {
                  $errormsg .= "All fields Required && Image Only Jpg , png or Jpeg Allowed";
               }
            
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
                  <label for="email">Destination Name:</label>
                  <input type="text" class="form-control" name="des_name" value="<?php echo $arr['des_name']; ?>" placeholder="Enter Destination Name">
               </div>
               <div class="form-group">
                  <label for="des_image">Destination Image</label>
                  <input type="file" class="form-control" name="des_image" placeholder="Upload Image">
                  <div class="m-2 p-2 pull-right">
                     <img src="travelo/destination/<?php echo $arr['des_image'];?>" style="width:250px;height:100px;">
                     <p class="text-danger">Image Name : <?php echo $arr['des_image'];?></p>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary" name="edit_dest">Update destination</button>
            </form>
         </div>
      </section>
   </div>
</div>
</div>