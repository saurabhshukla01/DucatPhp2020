<?php
session_start();
if(isset($_SESSION['email']))
{
?>
<?php include('dbcon.php'); ?>
<?php include('common/header.php'); ?>
<body class="container-flud" style="background-color: skyblue; margin:15px;">
   <div class="row">
      <?php
         if(isset($_POST['submit']))
             {
                 $name =  $_POST['name'];
                 $mobile = $_POST['mobile'];
                 $email = $_POST['email'];
                 $job_title = $_POST['job_title'];
                 $salary = $_POST['salary'];
                 $address = $_POST['address'];
                 $sql = "INSERT INTO `insertdb` (`name`, `mobile`, `email`,`job_title`,`salary`,`address`) VALUES
                 ('$name', '$mobile', '$email', '$job_title', '$salary','$address') ";
                 $result = mysqli_query($conn,$sql);

                 if($result === TRUE)
                 {
                     echo "<br>New Recoard Created Successfully<br>";
                     header("location:show-data.php");
                 }
                 else
                 {
                     echo "<br>Please Try again data in not inserted<br>";
                 }

             }

         ?>
      <div class="col-sm-6">
         <strong class="pt-2 pb-2 font-weight-bold" style="font-size:30px ; font-family:cursive ; color : blue;">
            Add Employee Data Into Table </strong>
         <form method="POST">
            <div class="form-group">
               <label for="name">Name</label>
               <input type="text" class="form-control" id="name" name="name" placeholder="Enter the name" required>
            </div>
            <div class="form-group">
               <label for="mobile">Mobile Number</label>
               <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" required>
            </div>
            <div class="form-group">
               <label for="email">Email</label>
               <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
               <label for="job_title">Job Title</label>
               <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Enter Job Title" required>
            </div>
            <div class="form-group">
               <label for="salary">Salary</label>
               <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter Salary" required>
            </div>
            <div class="form-group">
               <label for="address">Address</label>
               <input type="text" class="form-control" id="address" name="address" placeholder="Enter the Address" required>
            </div>
            <div class="form-group pb-4">
               <button type="submit" class="btn btn-primary" id="submit" name="submit">Add Employee</button>
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