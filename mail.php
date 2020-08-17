<?php
  if (isset($_POST["submit"])) {
  $f_name = $_POST['f_name'] ;
  $email = $_POST['email'] ;
  $subject = $_POST['subject'] ;
  $message = $_POST['message'] ;
         $to = "saurabh.shukla053@gmail.com";
         $subject = $subject ;
         
         $body = "From: $f_name\n <br><br> E-Mail: $email\n <br><br> Message:\n $message";
         
         $header = "From: $email \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$body,$header);
         
         if( $retval == true)  {
             $result =  " Thank You! Your request has been submitted successfully. " ;
         }else {
               $result = " Sorry there was an error sending your message. Please try again later " ;
         }
       }
 
      ?>    

<!-- Classic Heading -->
            <?php 
            if(!empty($result)){ ?>
            <div class="alert alert-info"><?php echo @$result ; ?></div>
            <?php } ?>

            <!-- Start Contact Form -->
            <form role="form"  method="post" id="contactForm" action="" data-toggle="validator" class="shake">
              <div class="form-group">
                <div class="controls">
                  <input type="text" name="f_name" id="name" placeholder="Name" required data-error="Please enter your name">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="email" class="email" name="email" id="email" placeholder="Email" required data-error="Please enter your email">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" id="msg_subject"  name="subject" placeholder="Subject" required data-error="Please enter your message subject">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <textarea id="message" rows="7" name="message" placeholder="Massage" required data-error="Write your message"></textarea>
                  <div class="help-block with-errors"></div>
                </div>  
              </div>
          <button  name="submit" type="submit"  class="btn-system btn-large">send message</button>  
              <div class="clearfix"></div>   
            </form>           
            <!-- End Contact Form -->