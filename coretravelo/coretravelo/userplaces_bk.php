<?php include('header.php'); ?>
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_2">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="bradcam_text text-center">
               <h3>Travelo All Places</h3>
               <p>Places Pixel perfect design with awesome contents</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!--/ bradcam_area  -->
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
                     <input id="datepicker" placeholder="Date">
                  </div>
                  <div class="input_field">
                     <select>
                        <option data-display="Travel type">Travel type</option>
                        <option value="1">Some option</option>
                        <option value="2">Another option</option>
                     </select>
                  </div>
                  <div class="search_btn">
                     <button class="boxed-btn4 " type="submit" >Search</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- where_togo_area_end  -->
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
            //$sql = "SELECT * FROM places order by updated_at desc";
            $sql = "SELECT * FROM places order by review_value desc";
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
                           <i class="fa fa-star"></i>-->
                        <?php
                           $review = $row['review_value'];
                           
                           if($review==5 ){?>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <?php
                           }
                           if($review==4 ){?>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <?php
                           }
                           if($review==3 ){?>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <?php
                           }
                           if($review==2 ){?>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <?php
                           }
                           if($review==1 ){?>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <?php
                           }
                           ?> 
                        <a href="#">(<?php echo (4 * $row['review_value']); ?> Review)</a>
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