<?php
session_start();
if(isset($_SESSION['email']))
{
?>
<?php include('dbcon.php'); ?>
<?php include('common/header.php'); ?>
<body class="container-flud" style="background-color: skyblue; margin:15px;">
   <div class="row">
      <div class="col-sm-6">
         <strong class="pt-2 pb-2 font-weight-bold" style="font-size:30px ; font-family:cursive ; color : blue;">
         Update Employee Data Into Table </strong>
         <?php
            if(isset($_POST['update']))
            {
              $id = $_GET['id'];
              $sql = "select * from `insertdb` Where id=$id";
              $result = mysqli_query($conn,$sql);
              while($row = mysqli_fetch_assoc($result))
              {
                  $name = $row['name'];
                  $mobile = $row['mobile'];
                  $email = $row['email'];
                  $job_title = $row['job_title'];
                  $salary = $row['salary'];
                  $address = $row['address'];
              }
            }


            if(isset($_POST['update1']))
              {
                  $id = $_GET['id'];
                  //echo $id;
                  $name = $_POST['name'];
                  $mobile = $_POST['mobile'];
                     $email = $_POST['email'];
                     $job_title = $_POST['job_title'];
                     $salary = $_POST['salary'];
                     $address = $_POST['address'];
                  $sql1 = "UPDATE `insertdb` set `name`='$name',`mobile`='$mobile',`email`='$email',
                  `job_title`='$job_title',`salary`='$salary',`address`='$address' where id=$id";
                  $result1 = mysqli_query($conn,$sql1);

                  if($result1 === TRUE)
                  {
                      echo "<br>New Recoard Updated Successfully<br>";
                      header('location:show-data.php');
                  }
                  else
                  {
                      echo "<br>Please Try again data in not Updated<br>";
                  }

              }
            ?>
         <form method="POST">
            <div class="form-group">
               <label for="name">Name</label>
               <input type="text" class="form-control" id="name" name="name" value="<?php echo @$name; ?>">
            </div>
            <div class="form-group">
               <label for="mobile">Mobile Number</label>
               <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo @$mobile; ?>">
            </div>
            <div class="form-group">
               <label for="email">Email</label>
               <input type="email" class="form-control" id="email" name="email" value="<?php echo @$email; ?>">
            </div>
            <div class="form-group">
               <label for="job_title">Job Title</label>
               <input type="text" class="form-control" id="job_title" name="job_title" value="<?php echo @$job_title; ?>">
            </div>
            <div class="form-group">
               <label for="salary">Salary</label>
               <input type="text" class="form-control" id="salary" name="salary" value="<?php echo @$salary; ?>">
            </div>
            <div class="form-group">
               <label for="address">Address</label>
               <input type="text" class="form-control" id="address" name="address" value="<?php echo @$address; ?>">
            </div>
            <div class="form-group pb-4">
               <input type=hidden name="id" value="<?php echo @$id ; ?>">
               <button type="submit" class="btn btn-primary" id="update1" name="update1">Update Employee</button>
            </div>
         </form>
      </div>
   </div>
</body>
<?php include('common/footer.php'); ?>
<?php
}
else
{
    header("location:index.php");
}
?>