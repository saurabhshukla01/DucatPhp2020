<?php include('header.php'); ?>
<?php
   $place_charge = $_GET['place_charge'];
   $place_name = $_GET['place_name'];
   ?>
<div class="destination_banner_wrap overlay">
   <div class="destination_text text-center">
      <h3><?php echo $place_name; ?> Details</h3>
      <h3>Price Charge Only <?php echo $place_charge; ?></h3>
      <p>If You Want to visit Place So Please Details Below there.</p>
   </div>
</div>
<div class="destination_details_info">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8 col-md-9">
            <div class="destination_info">
               <h3>Description</h3>
               <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
               <p>Variations of passages of lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
               <div class="single_destination">
                  <h4>Day-01</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
               </div>
               <div class="single_destination">
                  <h4>Day-02</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
               </div>
               <div class="single_destination">
                  <h4>Day-03</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
               </div>
            </div>
            <div class="bordered_1px"></div>
            <div class="contact_join">
               <h3>Contact for join</h3>
               <form action="#">
                  <div class="row">
                     <div class="col-lg-6 col-md-6">
                        <div class="single_input">
                           <input type="text" placeholder="Your Name">
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="single_input">
                           <input type="text" placeholder="Phone no.">
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="single_input">
                           <textarea name="" id="" cols="30" rows="10"placeholder="Message" ></textarea>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="submit_btn">
                           <button class="boxed-btn4" type="submit">submit</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
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
               <h3>More Places</h3>
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
   </div>
</div>
<?php include('footer.php'); ?>