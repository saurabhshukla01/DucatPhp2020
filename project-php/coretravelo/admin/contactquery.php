<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div id="main-wrapper">
   <div class="main-content">
      <section id="places">
         <div class="content-header bg-danger">
            <marquee>
               <h1 class="text-white">Welcome Travelo Popular Display Query Of your Website</h1>
            </marquee>
         </div>
         <h2 class="title">Welcome To Travelo Popular Contact Your Website Query.</h2>
         <div class="section-content">
            <table id="dataTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>Sr.No.</th>
                     <th>Contact UID</th>
                     <th>Contact Name</th>
                     <th>Contact Email</th>
                     <th>Contact Subject</th>
                     <th>Contact Message</th>
                     <th>Created At</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     $sql = "SELECT * FROM contacts order by created_at desc";
                     $sn = 1;
                     if($result = mysqli_query($link, $sql)){
                        while($row=mysqli_fetch_assoc($result)){
                     ?>
                  <tr>
                     <td><?php echo $sn; ?></td>
                     <td><?php echo $row['contact_uid']; ?></td>
                     <td><?php echo $row['contact_name']; ?></td>
                     <td><?php echo $row['contact_email']; ?></td>
                     <td><?php echo $row['contact_subject']; ?></td>
                     <td><?php echo $row['contact_message']; ?></td>
                     <td><?php echo $row['created_at'];?></td>
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