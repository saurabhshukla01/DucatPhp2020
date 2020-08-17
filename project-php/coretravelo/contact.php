<?php include('header.php'); ?>
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_4">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="bradcam_text text-center">
               <h3>contact</h3>
               <p>Pixel perfect design with awesome contents</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!--/ bradcam_area  -->
<!-- ================ contact section start ================= -->
<section class="contact-section">
   <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
         <div id="map" style="height: 480px; position: relative; overflow: hidden;"> </div>
         <script>
            function initMap() {
                var uluru = {
                    lat: -25.363,
                    lng: 131.044
                };
                var grayStyles = [{
                        featureType: "all",
                        stylers: [{
                                saturation: -90
                            },
                            {
                                lightness: 50
                            }
                        ]
                    },
                    {
                        elementType: 'labels.text.fill',
                        stylers: [{
                            color: '#ccdee9'
                        }]
                    }
                ];
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: -31.197,
                        lng: 150.744
                    },
                    zoom: 9,
                    styles: grayStyles,
                    scrollwheel: false
                });
            }
         </script>
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap"></script>
      </div>
      <div class="row">
         <?php 
            // add Contact
            $errormsg ="";
            $contact_message=$contact_email=$contact_name=$contact_subject="";
            
            extract($_POST);
            if(isset($contact_sub)){
               $contact_uid=uniqid();
               $contact_subject=trim($contact_subject);
               $contact_message=trim($contact_message);
               $contact_email=trim($contact_email);
               $contact_name=trim($contact_name);
            
               if(empty($contact_subject)||empty($contact_message)||empty($contact_email)||empty($contact_name)||empty($contact_subject)&&empty($contact_message)&&empty($contact_email)&&empty($contact_name)){
                  $errormsg .="All Fields Must be Required.";
               }
               else{
                  if(mysqli_query($link,"insert into contacts(contact_uid,contact_subject,contact_message,contact_email,contact_name) values('$contact_uid','$contact_subject','$contact_message','$contact_email','$contact_name')")){
                       $errormsg .="Please Visit Your Email Address Your Query is submmitted.";
                  }else{
                     $errormsg .="Not Post Contact Query please Try again";
                  }
               }
            
            }
            
            ?>
         <div class="col-12">
            <h2 class="contact-title">Get in Touch</h2>
         </div>
         <div class="col-lg-8">
            <?php if(!empty($errormsg)){?>
            <label class="alert-danger mb-2 p-2"><?php echo $errormsg;?></label>
            <?php } ?> 
            <form class="form-contact contact_form" method="POST">
               <div class="row">
                  <div class="col-12">
                     <div class="form-group">
                        <textarea class="form-control w-100" name="contact_message" cols="30" rows="9" placeholder=" Enter Message"></textarea>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control" name="contact_name" placeholder="Enter your name">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input type="email" class="form-control" name="contact_email"  placeholder="Enter email address">
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="form-group">
                        <input class="form-control" name="contact_subject" type="text" placeholder="Enter Subject">
                     </div>
                  </div>
               </div>
               <div class="form-group mt-3">
                  <input type="submit" name="contact_sub" class="button button-contactForm boxed-btn" value="Send Query">
               </div>
            </form>
         </div>
         <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="ti-home"></i></span>
               <div class="media-body">
                  <h3>Noida 137 , B044 Gulshan Vivante</h3>
                  <p>Club Noida 137 , Nearest</p>
                  <p>Metro Station 137 Noida</p>
               </div>
            </div>
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="ti-tablet"></i></span>
               <div class="media-body">
                  <h3>+91 (7290 944 755)</h3>
                  <p>Mon to Fri 8:30am to 6:30pm</p>
               </div>
            </div>
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="ti-email"></i></span>
               <div class="media-body">
                  <h3>Gpnoida137.admin@gmail.com</h3>
                  <p>Send us your query anytime!</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ================ contact section end ================= -->
<?php include('footer.php'); ?>