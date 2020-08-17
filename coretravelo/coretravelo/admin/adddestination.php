<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div id="main-wrapper">
   <div class="main-content">
      <section id="adddestination">
         <div class="content-header bg-danger">
            <marquee>
               <h1 class="text-white">Welcome Add Travelo Destinations</h1>
            </marquee>
         </div>
         <?php
            // add Destination
            $errormsg ="";
            extract($_POST);
            if(isset($add_dest))
            {
               $des_uid = uniqid();
               $des_name = $des_name;
               $fn = $_FILES['des_image']['name'];
               $tmp = $_FILES['des_image']['tmp_name'];
            
               $arr = explode('.',$fn);
               $ext = end($arr);
            
               if($ext=="jpg" || $ext=="jpeg" || $ext=="png")
               {
                  $fnn = rand().$fn;
                  if(mysqli_query($link,"insert into destinations(des_uid,des_name,des_image) values('$des_uid','$des_name','$fnn')"))
                  {
                     move_uploaded_file($tmp,"travelo/destination/".$fnn);
                     //$errormsg .= "Destination Added Successfully <br>";
                     $_SESSION['status']="Destination Added Successfully";
                     header("location:Destination.php");
                     exit();
                  }
                  else
                  {
                     $errormsg .= "Destination Already Exist <br>";
                  }
               }
               else
               {
                  $errormsg .= "Only Jpg, png, jpeg file allowed";
               }
            
               
            }
            
            ?>
         <div class="col-sm-10">
            <h2 class="title">Welcome Add Travelo Destinations</h2>
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
                  <label for="des_name">Destination Name:</label>
                  <input type="text" class="form-control" name="des_name" placeholder="Enter Destination Name" required>
               </div>
               <div class="form-group">
                  <label for="des_image">Destination Image</label>
                  <input type="file" class="form-control" name="des_image" placeholder="Upload Image" required>
               </div>
               <button type="submit" class="btn btn-primary" name="add_dest">Add Destination</button>
            </form>
         </div>
      </section>
   </div>
</div>
</div>