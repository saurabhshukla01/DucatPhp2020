<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div id="main-wrapper">
   <div class="main-content">
      <section id="changepassword">
         <?php
            $adminname = $_SESSION['adminname'];
            ?>
         <script>
            $(document).ready(function()
            {
               $('.updatepass').click(function()
               {
            
                  var op = $('#op').val();
                  var np = $('#np').val();
                  var cp = $('#cp').val();
            
                  if(np == cp)
                  {
                     $.get('changepasswordapi.php',{oldpass:op,newpass:np},function(data)
                        {
                           $('#op').val("");
                           $('#np').val("");
                           $('#cp').val("");
                           $('.message').html(data);
                        });
                  }
                  else
                  {
                     $('.message').html("<strong class='p-2'>New Password and Confirm Password are not matching</strong>");
                  }
               })
            })
         </script>
         <div class="content-header bg-danger">
            <marquee>
               <h1 class="text-white">Welcome Change Password Travelo Admin Panel</h1>
            </marquee>
         </div>
         <div class="section-content">
            <section class="col-sm-10">
               <h2 class="title">Change Password Travelo Admin Panel</h2>
               <label class="alert-info message">  </label>
               <div class="form-group">   
                  <label class="text-primary">Old Password</label>
                  <input type="password" id="op" class="form-control" required>
               </div>
               <div class="form-group">
                  <label class="text-primary">New Password</label>
                  <input type="password" id="np" class="form-control" required>
               </div>
               <div class="form-group">
                  <label class="text-primary">Confirm Password</label>
                  <input type="password" id="cp" class="form-control" required>
               </div>
               <div class="form-group">
                  <button href="javascript:void()" class="btn btn-success updatepass">Change Password</button>
               </div>
            </section>
         </div>
      </section>
   </div>
</div>
</div>
