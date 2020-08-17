<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div id="main-wrapper">
   <div class="main-content">
      <section id="comments">
         <div class="content-header bg-danger">
            <marquee>
               <h1 class="text-white">Welcome Comments Travelo</h1>
            </marquee>
         </div>
         <h2 class="title">Welcome To Comments Travelo Page</h2>
         <div class="section-content">
            <table id="dataTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>Sr.No.</th>
                     <th>Comment UID</th>
                     <th>Blog UID</th>
                     <th>Comment Name</th>
                     <th>Comment Email</th>
                     <th>Comment Body</th>
                     <th>Comment Date</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     $sql = "SELECT * FROM comments order by created_at desc";
                     $sn = 1;
                     if($result = mysqli_query($link, $sql)){
                        while($row=mysqli_fetch_assoc($result)){
                     ?>
                  <tr>
                     <td><?php echo $sn; ?></td>
                     <td><?php echo $row['comment_uid']; ?></td>
                     <td><?php echo $row['blog_uid']; ?></td>
                     <td><?php echo $row['comment_name']; ?></td>
                     <td><?php echo $row['comment_email']; ?></td>
                     <td><?php echo $row['comment_body']; ?></td>
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