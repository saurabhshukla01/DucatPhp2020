<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<!-- delete Destination code -->
<section id="deletedestination">
   <?php
      // delete Destination
      
      if(!empty($_GET['des_uid']) && !empty($_GET['des_image']))
      {
         $ddes_uid = $_GET['des_uid'];
         $ddes_image = $_GET['des_image'];
         mysqli_query($link,"delete from Destinations where des_uid='$ddes_uid'");
         @unlink("travelo/destination/".$ddes_image);
         $_SESSION['status']="Destination Delete Successfully";
         header("location:destination.php");
         exit();
      }
      ?>
   <script>
      function deleteconfirm()
      {
         if(confirm("Do You Want To Delete Your selected Destination ?"))
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
      <section id="destinations">
         <div class="content-header bg-danger">
            <marquee><h1 class="text-white">Welcome Destinations Travelo</h1></marquee>
         </div>
         <h2 class="title">Welcome To Destinations Travelo</h2>
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
            <button class="btn btn-primary pull-right m-2 p-2" onclick="window.location.href='adddestination.php'">Create New Destinations</button>
            <table id="dataTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>Sr.No.</th>
                     <th>Destination UID</th>
                     <th>Destination Name</th>
                     <th>Destination Image</th>
                     <th>Create Date</th>
                     <th colspan="3">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     $sql = "SELECT * FROM destinations order by created_at desc";
                     $sn = 1;
                     if($result = mysqli_query($link, $sql)){
                        while($row=mysqli_fetch_assoc($result)){
                     ?>
                  <tr>
                     <td><?php echo $sn; ?></td>
                     <td><?php echo $row['des_uid']; ?></td>
                     <td><?php echo $row['des_name']; ?></td>
                     <td><img src="travelo/destination/<?php echo $row['des_image'];?>" style="width:150px;height:75px;"> </td>
                     <td><?php echo $row['created_at'];?></td>
                     <td>
                        <a href="updatedestination.php?des_uid=<?php echo $row['des_uid'];?>"><button class="btn btn-sm btn-primary">Edit</button></a>
                        <a href="?des_uid=<?php echo $row['des_uid']?>&&des_image=<?php echo $row['des_image']?>"><button class="btn btn-sm btn-danger" onclick="return deleteconfirm()">Delete</button></a>
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