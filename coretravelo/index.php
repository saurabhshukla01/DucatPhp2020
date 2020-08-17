<?php include('header.php'); ?>
<?php include('slider.php'); ?>
<!-- where_togo_area_start  -->
<div class="where_togo_area">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-3">
            <div class="form_area">
               <h3>Where you want to go?</h3>
            </div>
         </div>
         <div class="col-lg-9">
            <div class="search_wrap">
               <form class="search_form" action="#">
                  <div class="input_field">
                     <input type="text" placeholder="Where to go?">
                  </div>
                  <div class="input_field">
                     <input id="datepicker" placeholder="Date (Ex : July 20 , 2020)">
                  </div>
                  <div class="input_field">
                     <select>
                        <option data-display="Select Travel type">Select Travel type</option>
                        <option value="Premium Travel Tour">Premium Travel Tour</option>
                        <option value="Advance Travel Tour">Advance Travel Tour</option>
                        <option value="Simple Travel Tour">Simple Travel Tour</option>
                     </select>
                  </div>
                  <div class="search_btn">
                     <button class="boxed-btn4" type="submit" >Search</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- where_togo_area_end  -->
<!-- popular_destination_area_start  -->
<div class="popular_destination_area">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6">
            <div class="section_title text-center mb_70">
               <h3>Popular Destination</h3>
               <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
            </div>
         </div>
      </div>
      <div class="row">
         <?php 
            $sql = "SELECT * FROM destinations order by updated_at desc LIMIT 9";
            if($result = mysqli_query($link, $sql)){
               while($row=mysqli_fetch_assoc($result)){
                  $des_name = $row['des_name'];
            ?>
         <div class="col-lg-4 col-md-6">
            <div class="single_destination">
               <div class="thumb">
                  <img src="admin/travelo/destination/<?php echo $row['des_image'];?>" alt="" style="width:350px;height:250px;">
               </div>
               <div class="content">
                  <p class="d-flex align-items-center"><?php echo $row['des_name'];?> 
                     <?php 
                        $sql1 = "SELECT count(place_name) as place_count FROM places Where des_name='$des_name'";
                        if($result1 = mysqli_query($link, $sql1)){
                           while($row_count=mysqli_fetch_assoc($result1)){?>
                     <a href="filterplaces.php?fdes_name=<?php echo $row['des_name'];?>"><?php echo $row_count['place_count'];?> Places</a> 
                     <?php
                        }
                        }
                        ?>
                  </p>
               </div>
            </div>
         </div>
         <?php }
            }
            ?>
      </div>
   </div>
</div>
<!-- popular_destination_area_end  -->
<!-- newletter_area_start  -->
<div class="newletter_area overlay">
   <div class="container">
      <div class="row justify-content-center align-items-center">
         <div class="col-lg-10">
            <div class="row align-items-center">
               <div class="col-lg-5">
                  <div class="newsletter_text">
                     <h4>Subscribe Our Newsletter</h4>
                     <p>Subscribe newsletter to get offers and about
                        new places to discover.
                     </p>
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="mail_form">
                     <div class="row no-gutters">
                        <div class="col-lg-9 col-md-8">
                           <div class="newsletter_field">
                              <input type="email" placeholder="Your mail" >
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                           <div class="newsletter_btn">
                              <button class="boxed-btn4 " type="submit" >Subscribe</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- newletter_area_end  -->
<div class="popular_places_area">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6">
            <div class="section_title text-center mb_70">
               <h3>Popular Places</h3>
               <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
            </div>
         </div>
      </div>
      <div class="row">
         <?php 
            //$sql = "SELECT * FROM places order by updated_at desc LIMIT 6";
            $sql = "SELECT * FROM places order by review_value desc LIMIT 6";
            if($result = mysqli_query($link, $sql)){
               while($row=mysqli_fetch_assoc($result)){
            ?>
         <div class="col-lg-4 col-md-6">
            <div class="single_place">
               <div class="thumb">
                  <img src="admin/travelo/place/<?php echo $row['place_image'];?>" alt="" style="width:350px;height:250px;">
                  <a href="#" class="prise"><?php echo $row['place_charge'];?></a>
               </div>
               <div class="place_info">
                  <a href="#">
                     <h3><?php echo $row['place_name'];?></h3>
                  </a>
                  <p><?php echo $row['des_name'];?></p>
                  <div class="rating_days d-flex justify-content-between">
                     <span class="d-flex justify-content-center align-items-center">
                        <!--<?php //echo $row['review_value'];?>&nbsp;
                           <i class="fa fa-star"></i> -->
                        <?php
                           $review = $row['review_value'];
                           for($i=1;$i<=$review;$i++){ ?>
                        <i class="fa fa-star"></i>
                        <?php } 
                           $i--;
                           if($i != 5){
                           for($i=$i;$i<5;$i++){ ?>
                        <i class="fa fa-star-o"></i>
                        <?php 
                           } 
                           } 
                           ?>
                        <a href="#">(<?php echo (4 * $review); ?> Review)</a>
                     </span>
                     <div class="days">
                        <i class="fa fa-clock-o"></i>
                        <a href="#">5 Days</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php  
            }
            }
            ?>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="more_place_btn text-center">
               <a class="boxed-btn4" href="userplaces.php">More Places</a>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="video_area video_bg overlay">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="video_wrap text-center">
               <h3>Enjoy Video</h3>
               <div class="video_icon">
                  <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=f59dDEk57i0">
                  <i class="fa fa-play"></i>
                  </a>
               </div>
            </div>
         </div>
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
            $sql = "SELECT * FROM trips order by updated_at desc LIMIT 6";
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
      <div class="row">
         <div class="col-lg-12">
            <div class="more_place_btn text-center">
               <a class="boxed-btn4" href="usertrips.php">More Trips</a>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include('footer.php'); ?>