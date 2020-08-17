<?php include('header.php'); ?>
<div class="destination_banner_wrap overlay">
   <div class="destination_text text-center">
      <marquee width="60%">
         <h3>Recent Trips View</h3>
         <p>If You Want to visit Place So Please Details Below there.</p>
      </marquee>
   </div>
</div>
<div class="recent_trip_area">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6">
            <div class="section_title text-center mb_70">
               <h3>Recent Trips</h3>
            </div>
         </div>
      </div>
      <div class="row">
         <?php 
            //$sql = "SELECT * FROM trips order by updated_at desc LIMIT 6";
            $sql = "SELECT * FROM trips order by updated_at desc";
            if($result = mysqli_query($link, $sql)){
               while($row=mysqli_fetch_assoc($result)){
            ?>  
         <div class="col-lg-4 col-md-6">
            <div class="single_trip">
               <div class="thumb">
                  <img src="admin/travelo/trip/<?php echo $row['trip_image'];?>" alt="" style="width:350px;height:250px;">
               </div>
               <div class="info">
                  <div class="date">
                     <span><?php echo $row['trip_date']; ?>
                     <a class="pull-right">Trip Charge : 
                     <?php echo $row['trip_price']; ?>
                     </a>
                     </span>
                  </div>
                  <a href="#">
                     <h3><?php echo $row['trip_desc']; ?>
                     </h3>
                  </a>
               </div>
            </div>
         </div>
         <?php
            }
            }
            ?>
      </div>
   </div>
</div>
<div class="travel_variation_area">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="single_travel text-center">
               <div class="icon">
                  <img src="img/svg_icon/1.svg" alt="">
               </div>
               <h3>Comfortable Journey</h3>
               <p>A wonderful serenity has taken to the possession of my entire soul.</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single_travel text-center">
               <div class="icon">
                  <img src="img/svg_icon/2.svg" alt="">
               </div>
               <h3>Luxuries Hotel</h3>
               <p>A wonderful serenity has taken to the possession of my entire soul.</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single_travel text-center">
               <div class="icon">
                  <img src="img/svg_icon/3.svg" alt="">
               </div>
               <h3>Travel Guide</h3>
               <p>A wonderful serenity has taken to the possession of my entire soul.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include('clipslider.php'); ?>
<?php include('footer.php'); ?>