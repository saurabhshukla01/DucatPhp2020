<?php 
   include("config/database.php");
   session_start();
   if(!empty($_SESSION['adminname']))
   {
     header('Location: dashboard.php');
   }
   
   $aname = $aemail = $password = "";
   
   extract($_POST);
   
   if(isset($login))
   {
      $aname = $aname;
      $aemail = $aemail;
      $password = $password;
      // Attempt select query execution
      //$sql = "SELECT * FROM admins where admin_id=1";
      $sql = "SELECT * FROM admins where name='$aname'";
   
      if($result = mysqli_query($link, $sql)){
          if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
                  if($row['name']== $aname && $row['email']== $aemail && $row['password']== $password){
                     $_SESSION['adminname'] = $row['name'];
                     $_SESSION['adminemail'] = $row['email'];
                     header("location:dashboard.php");
                  }
                  else{
                     header("location:index.php");
                  }
              }
          } 
      } 
   
   }
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Travelo Admin Panel</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="shortcut icon" type="image/x-icon" href="img/travelo-admin.png">
      <link rel="stylesheet" href="css/admin-login.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   </head>
   <body>
      <form method="POST">
         <h2 class="m-2 p-2">Admin Login</h2>
         <input type="text" class="text-field" name="aname" value="<?php echo @$aname ?>" placeholder="Admin Name" title="Please Enter Admin Name" required>
         <input type="email" class="text-field" name="aemail" value="<?php echo @$aemail ?>" placeholder="Admin Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter Valid Email Address"  required>
         <input type="password" class="text-field" name="password" placeholder="Admin Password" required>
         <input type="submit" class="button" name="login" value="Log In" />
      </form>
   </body>
</html>