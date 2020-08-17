<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div id="main-wrapper">
   <div class="main-content">
      <section id="adddestination">
         <div class="content-header bg-danger">
            <marquee>
               <h1 class="text-white">Welcome Add Travelo Places</h1>
            </marquee>
         </div>
         <?php 
            $errormsg="";
            $place_name = $review_value = $place_charge = $place_image = $des_name = $travel_type ="";
            $valid_place_name = $valid_des_name = $valid_place_charge = $valid_review_value = $valid_place_charge =$valid_travel_type="false";
            
            extract($_POST);
            
            if(isset($add_plc))
            {
               $place_uid = uniqid();
               $place_name = trim($place_name);
               $des_name = trim($des_name);
               $review_value = trim($review_value);
               $travel_type = trim($travel_type);
               $place_charge = trim($place_charge);
               $fn = $_FILES['place_image']['name'];
               $tmp = $_FILES['place_image']['tmp_name'];
               $arr = explode('.',$fn);
               $ext = end($arr);
               if(empty($place_name))
               {
                  $errormsg .="<br> Place Name Must be Required <br>";
               }
               else
               {
                  $valid_place_name="true";
               }
               if(empty($des_name))
               {
                  $errormsg .="<br>Destination Must be Required <br>";
               }
               else
               {
                  $valid_des_name="true";
               }
            
            
               if($ext=="jpg" || $ext=="jpeg" || $ext=="png")
               {
                  $fnn = rand().$fn;
                  $valid_place_image="true";
            
                  if(mysqli_query($link,"insert into places(place_uid,place_name,des_name,place_image,review_value,place_charge,travel_type) values('$place_uid','$place_name','$des_name','$fnn','$review_value','$place_charge','$travel_type')"))
                  {
                     move_uploaded_file($tmp,"travelo/place/".$fnn);
                     //$errormsg .= "Destination Added Successfully <br>";
                     $_SESSION['status']="Places Added Successfully";
                     header("location:places.php");
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
            
               if(empty($review_value))
               {
                  $errormsg .="<br> Review Value Must be Required <br>";
               }
               else
               {
                  $valid_review_value="true";
               }
            
               if(empty($travel_type))
               {
                  $errormsg .="<br>Travel Type Must be Required <br>";
               }
               else
               {
                  $valid_travel_type="true";
               }
            
               if(empty($place_charge))
               {
                  $errormsg .="<br> Place Charge Must be Required <br>";
               }
               else
               {
                  $valid_place_charge="true";
               }
            
            
            } 
            ?>
         <div class="col-sm-10">
            <h2 class="title">Welcome Add Travelo Places</h2>
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
                  <label for="place_name">Place Name :</label>
                  <input type="text" class="form-control" name="place_name" placeholder="Enter Place Name" required>
               </div>
               <div class="form-group">
                  <label for="des_name">Please Select Your Destination :</label>
                  <select name="des_name" class="form-control" required>
                     <option value="" disabled selected>Choose Destination Where Is Located Your Place</option>
                     <?php 
                        if($result = mysqli_query($link,"select * from destinations")){
                           while($row=mysqli_fetch_assoc($result)){
                        ?>
                     <option value="<?php echo $row['des_name']; ?>">
                        <?php echo $row['des_name']; ?>
                     </option>
                     <?php 
                        }
                        }
                        ?>
                  </select>
               </div>
               <div class="form-group">
                  <label for="place_image">Place Image :</label>
                  <input type="file" class="form-control" name="place_image" placeholder="Upload Image" required>
               </div>
               <div class="form-group">
                  <label for="review_value">Review Value :</label>
                  <select name="review_value" class="form-control" required>
                     <option value="" disabled selected>Choose Review Here (Outoff 5 Star)</option>
                     <option value="1">1 Outoff 5</option>
                     <option value="2">2 Outoff 5</option>
                     <option value="3">3 Outoff 5</option>
                     <option value="4">4 Outoff 5</option>
                     <option value="5">5 Outoff 5</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="travel_type">Select Travel Tour Type :</label>
                  <select name="travel_type" class="form-control" required>
                     <option value="" disabled selected>Choose Travel Type</option>
                     <option value="Premium Travel Tour">Premium Travel Tour</option>
                     <option value="Advance Travel Tour">Advance Travel Tour</option>
                     <option value="Simple Travel Tour">Simple Travel Tour</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="place_charge">Place Entry Fee Charge :</label>
                  <input type="text" class="form-control" name="place_charge" placeholder="Enter Place Entry Fee Charge" required>
               </div>
               <button type="submit" class="btn btn-primary" name="add_plc">Add Place</button>
            </form>
         </div>
      </section>
   </div>
</div>
</div>