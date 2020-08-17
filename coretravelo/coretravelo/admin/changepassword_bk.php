<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div id="main-wrapper">
   <div class="main-content">
<section id="changepassword">
   <div class="content-header bg-danger">
      <marquee><h1 class="text-white">Welcome Change Password Travelo Admin Panel</h1></marquee>
   </div>
   <div class="section-content">
      <section class="col-sm-10">
         <h2 class="title">Change Password Travelo Admin Panel</h2>
         <label class="alert-info message">	</label>
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
            <a href="javascript:void" class="btn btn-success updatepass">Change Password</a>
         </div>
      </section>
   </div>
</section>
</div>
</div>
</div>