<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<!-- delete Destination code -->
<section id="deletedplace">
   <?php
      // delete Place
      
      if(!empty($_GET['place_uid']) && !empty($_GET['place_image']))
      {
         $dplace_uid = $_GET['place_uid'];
         $dplace_image = $_GET['place_image'];
         mysqli_query($link,"delete from places where place_uid='$dplace_uid'");
         @unlink("travelo/place/".$dplace_image);
         $_SESSION['status']="Place Delete Successfully";
         header("location:places.php");
         exit();
      }
      ?>
   <script>
      function deleteconfirm()
      {
         if(confirm("Do You Want To Delete Your selected Place ?"))
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
               <h1 class="text-white">Welcome Travelo Popular Places</h1>
            </marquee>
         </div>
         <h2 class="title">Welcome To Travelo Popular Places.</h2>
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
            <button class="btn btn-primary pull-right m-2 p-2" onclick="window.location.href='addplace.php'">Create New Places</button>
            <table id="dataTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>Sr.No.</th>
                     <th>Place Name</th>
                     <th>Place Image</th>
                     <th>Destination Name</th>
                     <th>Travel Tour Type</th>
                     <th>Review Value</th>
                     <th>Place Visit Charge</th>
                     <th>Create Date</th>
                     <th colspan="3">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     $sql = "SELECT * FROM places order by created_at desc";
                     $sn = 1;
                     if($result = mysqli_query($link, $sql)){
                        while($row=mysqli_fetch_assoc($result)){
                     ?>
                  <tr>
                     <td><?php echo $sn; ?></td>
                     <td><?php echo $row['place_name']; ?></td>
                     <td><img src="travelo/place/<?php echo $row['place_image'];?>" style="width:150px;height:75px;"> </td>
                     <td><?php echo $row['des_name']; ?></td>
                     <td><?php echo $row['travel_type']; ?></td>
                     <td><?php echo $row['review_value']; ?></td>
                     <td><?php echo $row['place_charge']; ?></td>
                     <td><?php echo $row['created_at'];?></td>
                     <td>
                        <span class="btn-group" role="group">
                        <a href="updateplace.php?place_uid=<?php echo $row['place_uid'];?>"><button class="btn btn-sm btn-primary m-1">Edit</button></a>
                        <a href="?place_uid=<?php echo $row['place_uid'];?>&&place_image=<?php echo $row['place_image']?>"><button class="btn btn-sm btn-danger m-1" onclick="return deleteconfirm()">Delete</button></a>
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
