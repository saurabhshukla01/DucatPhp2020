<?php include('dbcon.php'); ?>
<?php
    if(isset($_POST['register']))
    {
        $name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        //echo $name.$email.$password;
        $sql = "INSERT INTO `admin` (`name`, `email`, `password`,`gender`,`city`) VALUES
                ('$name', '$email', '$password', '$gender', '$city') ";
        $result = mysqli_query($conn,$sql);

        if($result === TRUE)
            {
              echo "<br>Registration Successfully<br>";
              header("location:login.php");
            }
        else
            {
                  echo "<br>Please Try again data in not inserted<br>";
            }

    }
?>

<html>
    <head>
    <title>Registration</title>
    </head>
    <body bgcolor="orange">
        <center><h2>Registration Page</h2></center>
        <form method="post">

	<table border="1" align="center" bgcolor="lightgreen" style="width:50%;height:50%;">
		<tr>
			<th colspan="2">Registration</th>
		</tr>

		<tr>
			<th>Name</th>
			<th><input type="text" name="user_name" required></th>
		</tr>

		<tr>
			<th>Email</th>
			<th><input type="email" name="email" required></th>
		</tr>

		<tr>
			<th>Password</th>
			<th><input type="password" name="password" required></th>
		</tr>

		<tr>
			<th>Gender</th>
			<th>
			    <input type="radio" name="gender" value="Male" required>Male
			    <input type="radio" name="gender" value="Female" required>Female
			</th>
		</tr>

		<tr>
			<th>City</th>
			<th><select name="city">
					<option value="" hidden>Select</option>
					<option value="Delhi">Delhi</option>
					<option value="Noida">Noida</option>
					<option value="Kanpur">Kanpur</option>
					<option value="Agra">Agra</option>
			</select></th>
		</tr>

		<tr>
			<th colspan="2">
				<input type="submit" name="register" name="register" value="register">
			</th>
		</tr>
	</table>

	</form>
    </body>
</html>