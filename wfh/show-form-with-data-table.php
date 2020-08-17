<html>
<head>
<title>
Table of student
</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<?php
// show database data in browser with connected database using mysqli connection ==>
// database name =>  Ducatwfh_db , table name  :  student ;

$db_host = "localhost";
$db_name = "Ducatwfh_db";
$db_usr = "root";
$db_password = "";

$conn = mysqli_connect($db_host,$db_usr,$db_password,$db_name);
if(!$conn)
{
    die("Database Not connected Please Try server is not connected");
}
    echo "<strong>Connected Database connection</strong><hr>";

?>

<body class="container" style="background-color: skyblue;">
    <div class="row">
            <div class="col-sm-4">
            <strong align="center" class="pt-2 pb-4 font-weight-bold" style="font-size:30px ; font-family:cursive ; color : blue;">
            Insert Student Data </strong>
            	<?php

	                if(isset($_POST['submit']))
	                    {
	                        $name =  $_POST['name'];
	                        $rollno = $_POST['rollno'];
	                        $address = $_POST['address'];
	                        $class = $_POST['class'];
	                        $sql1 = "INSERT INTO `student` (`name`, `rollno`, `address`, `class`) VALUES ('$name', '$rollno', '$address', '$class') ";
	                        $result1 = mysqli_query($conn,$sql1);

	                        if($result1 === TRUE)
	                        {
	                            echo "<br>New Recoard Created Successfully<br>";
	                        }
	                        else
	                        {
	                            echo "<br>Please Try again data in not inserted<br>";
	                        }

	                    }

            	?>
                <form method="POST">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter the name" required>
                      </div>
                      <div class="form-group">
                        <label for="rollno">Roll Number</label>
                        <input type="text" class="form-control" id="rollno" name="rollno" placeholder="Enter the Roll no" required>
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter the Address" required>
                      </div>
                      <div class="form-group">
                        <label for="class">Class</label>
                        <input type="text" class="form-control" id="class" name="class" placeholder="Enter Class Name" required>
                      </div>
                      <div class="form-group">
                      	<button type="submit" class="btn btn-primary" id="submit" name="submit">Submit Form</button>
                      </div>
                </form>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
            <strong class="pt-2 pb-2 font-weight-bold text-center" style="font-size:30px ; font-family:cursive ; color : blue;">
            Show Student Data Into Table </strong>
            <?php
                $sql = "Select * from student";
                $result = mysqli_query($conn,$sql);

            ?>
                <table class="table table-bordered" style="background-color: red ; color : yellow ;">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Sr no.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Roll No</th>
                      <th scope="col">Address</th>
                      <th scope="col">Class</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                      if (mysqli_num_rows($result) > 0)
                        {
                            $i = 1;
                            while($row = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                echo "<th scope='row'>" . $row['id'] . "</th>";
                                echo "<td>" . $i . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['rollno'] . "</td>";
                                echo "<td>" . $row['address'] . "</td>";
                                echo "<td>" . $row['class'] . "</td>";
                                echo "</tr>";
                                $i++;
                            }
                        }
                      else
                      {
                            echo "<br>NO recoard Data <br>";
                      }

                  ?>
                 </tbody>
              </table>
            </div>
        </div>
    </body>
</html>