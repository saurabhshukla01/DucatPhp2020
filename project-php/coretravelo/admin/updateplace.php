<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div id="main-wrapper">
   <div class="main-content">
      <section id="adddestination">
         <div class="content-header bg-danger">
            <marquee>
               <h1 class="text-white">Welcome Update Travelo Places</h1>
            </marquee>
         </div>
         <?php
            $place_uid = $_GET['place_uid'];
            // get Place by uid
            $select_data = mysqli_query($link,"select * from places where place_uid='$place_uid'");
            $arr =mysqli_fetch_assoc($select_data);
            $oldimage = $arr['place_image'];
            
            // update Place
            extract($_POST);
            
            if(isset($edit_plc))
            {
            $fn = $_FILES['place_image']['name'];
            $tmp = $_FILES['place_image']['tmp_name'];
            
            if(empty($fn) && !empty($des_name) && !empty($review_value) && !empty($place_charge) && !empty($travel_type))
            {
               // update data with all fields in places Table
               if(mysqli_query($link,"update places set place_name='$place_name',des_name='$des_name',review_value='$review_value',place_charge='$place_charge' ,travel_type='$travel_type' where place_uid='$place_uid'"))
               {
                  $_SESSION['status']="Place Update Successfully";
                  header("location:places.php");
                  exit();
               }
               else
               {
                  $errormsg = "<br> Not Update Data All Fields Must Be Required Please Check again <br>";
               }
            }
            else
            {
               // update Place Data and image
            
            
               $arr2 = explode('.',$fn);
               $ext = end($arr2);
            
               if($ext=="jpg" || $ext=="jpeg" || $ext=="png")
               {
                  $fnn = rand().$fn;
                  if(mysqli_query($link,"update places set place_name='$place_name',des_name='$des_name',review_value='$review_value',place_charge='$place_charge',travel_type='$travel_type',place_image='$fnn' where place_uid='$place_uid'"))
                  {
                     move_uploaded_file($tmp,"travelo/place/".$fnn);
                     unlink("travelo/place/".$oldimage);
                     $_SESSION['status']="Place Update Successfully";
                     header("location:places.php");
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
            <h2 class="title">Welcome Update Travelo Places</h2>
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
                  <input type="text" class="form-control" name="place_name" value="<?php echo $arr['place_name']; ?>" placeholder="Enter Place Name">
               </div>
               <div class="form-group">
                  <label for="des_name">Please Select Your Destination :</label>
                  <select name="des_name" class="form-control">
                     <?php
                        if($result = mysqli_query($link,"select * from destinations")){
                           while($row=mysqli_fetch_assoc($result)){
                        ?>
                     <?php if($row['des_name'] == $arr['des_name']){ ?>
                     <option value="<?php echo $arr['des_name']; ?>" selected><?php echo $arr['des_name']; ?></option>
                     <?php }else{ ?>
                     <option value="<?php echo $row['des_name']; ?>">
                        <?php echo $row['des_name']; ?>
                     </option>
                     <?php }?>
                     <?php
                        }
                        }
                        ?>
                  </select>
               </div>
               <div class="form-group">
                  <label for="review_value">Review Value :</label>
                  <select name="review_value" class="form-control">
                     <?php if($arr['review_value']==1){?>
                     <option value="<?php echo $arr['review_value'];?>" selected><?php echo $arr['review_value']; ?> Outoff 5</option>
                     <option value="2">2 Outoff 5</option>
                     <option value="3">3 Outoff 5</option>
                     <option value="4">4 Outoff 5</option>
                     <option value="5">5 Outoff 5</option>
                     <?php } ?>
                     <?php if($arr['review_value']==2){?>
                     <option value="1">1 Outoff 5</option>
                     <option value="<?php echo $arr['review_value'];?>" selected><?php echo $arr['review_value']; ?> Outoff 5</option>
                     <option value="3">3 Outoff 5</option>
                     <option value="4">4 Outoff 5</option>
                     <option value="5">5 Outoff 5</option>
                     <?php } ?>
                     <?php if($arr['review_value']==3){?>
                     <option value="1">1 Outoff 5</option>
                     <option value="2">2 Outoff 5</option>
                     <option value="<?php echo $arr['review_value'];?>" selected><?php echo $arr['review_value']; ?> Outoff 5</option>
                     <option value="4">4 Outoff 5</option>
                     <option value="5">5 Outoff 5</option>
                     <?php } ?>
                     <?php if($arr['review_value']==4){?>
                     <option value="1">1 Outoff 5</option>
                     <option value="2">2 Outoff 5</option>
                     <option value="3">3 Outoff 5</option>
                     <option value="<?php echo $arr['review_value'];?>" selected><?php echo $arr['review_value']; ?> Outoff 5</option>
                     <option value="5">5 Outoff 5</option>
                     <?php } ?>
                     <?php if($arr['review_value']==5){?>
                     <option value="1">1 Outoff 5</option>
                     <option value="2">2 Outoff 5</option>
                     <option value="3">3 Outoff 5</option>
                     <option value="4">4 Outoff 5</option>
                     <option value="<?php echo $arr['review_value'];?>" selected><?php echo $arr['review_value']; ?> Outoff 5</option>
                     <?php } ?>
                  </select>
               </div>
               <div class="form-group">
                  <label for="travel_type">Select Travel Tour Type :</label>
                  <select name="travel_type" class="form-control">
                     <?php if($arr['travel_type']=="Premium Travel Tour"){?>
                     <option value="<?php echo $arr['travel_type'];?>" selected><?php echo $arr['travel_type']; ?></option>
                     <option value="Advance Travel Tour">Advance Travel Tour</option>
                     <option value="Simple Travel Tour">Simple Travel Tour</option>
                     <?php } ?>
                     <?php if($arr['travel_type']=="Advance Travel Tour"){?>
                     <option value="Advance Travel Tour">Premium Travel Tour</option>
                     <option value="<?php echo $arr['travel_type'];?>" selected><?php echo $arr['travel_type']; ?></option>
                     <option value="Simple Travel Tour">Simple Travel Tour</option>
                     <?php } ?>
                     <?php if($arr['travel_type']=="Simple Travel Tour"){?>
                     <option value="Advance Travel Tour">Advance Travel Tour</option>
                     <option value="Simple Travel Tour">Premium Travel Tour</option>
                     <option value="<?php echo $arr['travel_type'];?>" selected><?php echo $arr['travel_type']; ?></option>
                     <?php } ?>
                  </select>
               </div>
               <div class="form-group">
                  <label for="place_charge">Place Entry Fee Charge :</label>
                  <input type="text" class="form-control" name="place_charge" value="<?php echo $arr['place_charge']; ?>" placeholder="Enter Place Entry Fee Charge">
               </div>
               <div class="form-group">
                  <label for="place_image">Place Image :</label>
                  <input type="file" class="form-control" name="place_image" placeholder="Upload Image">
                  <div class="m-2 p-2 pull-right">
                     <img src="travelo/place/<?php echo $arr['place_image'];?>" style="width:250px;height:100px;">
                     <p class="text-danger">Image Name : <?php echo $arr['place_image'];?></p>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary" name="edit_plc">Update Place</button>
            </form>
         </div>
      </section>
   </div>
</div>
</div>