<footer class="footer">
   <div class="footer_top">
      <div class="container">
         <div class="row">
            <div class="col-xl-4 col-md-6 col-lg-4 ">
               <div class="footer_widget">
                  <div class="footer_logo">
                     <a href="#">
                     <img src="img/footer_logo.png" alt="">
                     </a>
                  </div>
                  <p>Noida 137 , B044 Gulshan Vivante <br> Club Noida 137 , Nearest <br> Metro Station 137 Noida <br>
                     <a href="#">+91 (7290 944 755)</a> <br>
                     <a href="#">Gpnoida137.admin@gmail.com</a>
                  </p>
                  <div class="socail_links">
                     <ul>
                        <li>
                           <a href="https://www.facebook.com/">
                           <i class="ti-facebook"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://twitter.com/LOGIN">
                           <i class="ti-twitter-alt"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.instagram.com/accounts/login/">
                           <i class="fa fa-instagram"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.pinterest.com/">
                           <i class="fa fa-pinterest"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.youtube.com/">
                           <i class="fa fa-youtube-play"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-2">
               <div class="footer_widget">
                  <h3 class="footer_title">
                     Pages Link
                  </h3>
                  <ul class="links">
                     <li><a href="index.php">Home</a></li>
                     <li><a href="about.php">About</a></li>
                     <li><a href="usertrips.php">Recent Trips</a></li>
                     <li><a href="userplaces.php">Places</a></li>
                     <li><a href="contact.php">Contact</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-3">
               <div class="footer_widget">
                  <h3 class="footer_title">
                     Popular destination
                  </h3>
                  <ul class="links double_links">
                     <?php 
                        $sql = "SELECT * FROM destinations order by updated_at desc LIMIT 10";
                        if($result = mysqli_query($link, $sql)){
                           while($row=mysqli_fetch_assoc($result)){
                        ?>
                     <li><a href="#"><?php echo $row['des_name'];?></a></li>
                     <?php
                        }
                        }
                        ?>
                  </ul>
               </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-3">
               <div class="footer_widget">
                  <h3 class="footer_title">
                     Popular Destinations
                  </h3>
                  <div class="instagram_feed">
                     <?php 
                        $sql = "SELECT * FROM destinations order by updated_at desc LIMIT 6";
                        if($result = mysqli_query($link, $sql)){
                           while($row=mysqli_fetch_assoc($result)){
                        ?>
                     <div class="single_insta">
                        <a href="#">
                        <img class="rounded" src="admin/travelo/destination/<?php echo $row['des_image'];?>" alt="destination Images" style="width:120px;height:80px;">
                        </a>
                     </div>
                     <?php
                        }
                        }
                        ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="copy-right_text">
      <div class="container">
         <div class="footer_border"></div>
         <div class="row">
            <div class="col-xl-12">
               <p class="copy_right text-center">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights has been Reverted with | This Design is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="index.php" target="_blank">Travelo Tour created By Saurabh Shukla</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
               </p>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- Modal -->
<div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="serch_form">
            <input type="text" placeholder="Search" >
            <button type="submit">search</button>
         </div>
      </div>
   </div>
</div>
<!-- link that opens popup -->
<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery-ui.min.js"> </script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/range.js"></script>
<!-- <script src="js/gijgo.min.js"></script> -->
<script src="js/slick.min.js"></script>
<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
<!--<script>
   $('#datepicker').datepicker({
       iconsLibrary: 'fontawesome',
       icons: {
        rightIcon: '<span class="fa fa-caret-down"></span>'
    }
   });
   </script>-->
</body>
</html>