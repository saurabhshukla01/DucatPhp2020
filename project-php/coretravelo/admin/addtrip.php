<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div id="main-wrapper">
   <div class="main-content">
      <section id="adddestination">
         <div class="content-header bg-danger">
            <marquee>
               <h1 class="text-white">Welcome Add Travelo Trips</h1>
            </marquee>
         </div>
         <?php
            // add Trips
            $errormsg ="";
            $trip_name = $travel_type = $trip_price = $trip_date = $trip_desc ="";
            extract($_POST);
            if(isset($add_trip))
            {
               $trip_uid = uniqid();
               $trip_name = trim($trip_name);
               $travel_type = trim($travel_type);
               $trip_price = trim($trip_price);
               $trip_date = trim($trip_date);
               $trip_desc = trim($trip_desc);
               //$trip_date = date("F j, Y");
               $fn = $_FILES['trip_image']['name'];
               $tmp = $_FILES['trip_image']['tmp_name'];
               $arr = explode('.',$fn);
               $ext = end($arr);
            
               if(empty($trip_name))
               {
                  $errormsg .="<br>Trip Name Must be Required<br>";
               }
            
               if(empty($travel_type))
               {
                  $errormsg .="<br>Trip Travel Type Must be Required<br>";
               }
            
               if(empty($trip_price))
               {
                  $errormsg .="<br>Trip Price Charge Must be Required<br>";
               }
            
               if(empty($trip_desc))
               {
                  $errormsg .="<br>Trip Description Must be Required<br>";
               }
            
               if(empty($trip_date))
               {
                  //$trip_date = date("F j, Y");
                  $errormsg .="<br>Trip Date Must be Required<br>";
               }
            
               if($ext=="jpg" || $ext=="jpeg" || $ext=="png")
               {
                  $fnn = rand().$fn;
                  if(mysqli_query($link,"insert into trips(trip_uid,trip_name,travel_type,trip_price,trip_desc,trip_date,trip_image) values('$trip_uid','$trip_name','$travel_type','$trip_price','$trip_desc','$trip_date','$fnn')"))
                  {
                     move_uploaded_file($tmp,"travelo/trip/".$fnn);
                     //$errormsg .= "Trip Added Successfully <br>";
                     $_SESSION['status']="Trip Added Successfully";
                     header("location:trips.php");
                     exit();
                  }
                  else
                  {
                     $errormsg .= "<br>Not Added Trip Please Try again <br>";
                  }
               }
               else
               {
                  $errormsg .= "<br>Only Jpg, png, jpeg file allowed<br>";
               }
            
            
            }
            
            ?>
         <div class="col-sm-10">
            <h2 class="title">Welcome Add Travelo Trips</h2>
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
                  <label for="trip_name">Trip Name:</label>
                  <input type="text" class="form-control" name="trip_name" placeholder="Enter Trip Name" required>
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
                  <label for="trip_price">Trip Travel Price:</label>
                  <input type="text" class="form-control" name="trip_price" placeholder="Enter Trip Travel Price" required>
               </div>
               <div class="form-group">
                  <label for="trip_desc">Trip Description:</label>
                  <textarea type="text" class="form-control" name="trip_desc" placeholder="Enter Trip Description" required></textarea>
               </div>
               <div class="form-group">
                  <label for="des_name">Recent Trip Date:</label>
                  <input type="text" class="form-control" name="trip_date" placeholder="Enter Trip Date (Ex : Oct 29 , 2019) " required>
               </div>
               <div class="form-group">
                  <label for="trip_image">Trip Image</label>
                  <input type="file" class="form-control" name="trip_image" placeholder="Trip Image" required>
               </div>
               <button type="submit" class="btn btn-primary" name="add_trip">Add Recent Trip</button>
            </form>
         </div>
      </section>
   </div>
</div>
</div>