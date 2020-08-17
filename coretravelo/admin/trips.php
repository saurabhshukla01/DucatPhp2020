<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<!-- delete Trip code -->
<section id="deletetrip">
   <?php
      // delete Trip
      
      if(!empty($_GET['trip_uid']) && !empty($_GET['trip_image']))
      {
         $dtrip_uid = $_GET['trip_uid'];
         $dtrip_image = $_GET['trip_image'];
         mysqli_query($link,"delete from trips where trip_uid='$dtrip_uid'");
         @unlink("travelo/trip/".$trip_image);
         $_SESSION['status']="Trip Delete Successfully";
         header("location:trips.php");
         exit();
      }
      ?>
   <script>
      function deleteconfirm()
      {
         if(confirm("Do You Want To Delete Your selected Trip ?"))
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
      <section id="trips">
         <div class="content-header bg-danger">
            <marquee>
               <h1 class="text-white">Welcome Recent Trips Travelo</h1>
            </marquee>
         </div>
         <h2 class="title">Welcome To Recent Trips Travelo</h2>
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
            <button class="btn btn-primary pull-right m-2 p-2" onclick="window.location.href='addtrip.php'">Create New Trips</button>
            <table id="dataTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>Sr.No.</th>
                     <th>Trip Name</th>
                     <th>Travel Type</th>
                     <th>Trip Price Charge</th>
                     <th>Trip Description</th>
                     <th>Recent Trip Date</th>
                     <th>Trip Image</th>
                     <th>Create Date</th>
                     <th colspan="3">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     $sql = "SELECT * FROM trips order by created_at desc";
                     $sn = 1;
                     if($result = mysqli_query($link, $sql)){
                        while($row=mysqli_fetch_assoc($result)){
                     ?>
                  <tr>
                     <td><?php echo $sn; ?></td>
                     <td><?php echo $row['trip_name']; ?></td>
                     <td><?php echo $row['travel_type']; ?></td>
                     <td><?php echo $row['trip_price']; ?></td>
                     <td><?php echo $row['trip_desc']; ?></td>
                     <td><?php echo $row['trip_date']; ?></td>
                     <td><img src="travelo/trip/<?php echo $row['trip_image'];?>" style="width:150px;height:75px;"> </td>
                     <td><?php echo $row['created_at'];?></td>
                     <td>
                        <span class="btn-group" role="group">
                        <a href="updatetrip.php?trip_uid=<?php echo $row['trip_uid'];?>"><button class="btn btn-sm btn-primary m-1">Edit</button></a>
                        <a href="?trip_uid=<?php echo $row['trip_uid']?>&&trip_image=<?php echo $row['trip_image']?>"><button class="btn btn-sm btn-danger m-1" onclick="return deleteconfirm()">Delete</button></a>
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