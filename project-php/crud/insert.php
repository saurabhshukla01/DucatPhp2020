<?php

$link = mysqli_connect("localhost","root","","6pm") or die(mysqli_connect_error());



extract($_POST);

if(isset($sub))
{
	if(mysqli_query($link,"insert into employee (name,email) values ('$un','$em')"))
	{
		header("location:index.php");
	}
	else
	{
		//echo "Email Already Exist";
		echo mysqli_error($link);
	}
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
</head>
<body>

	<form method="post">

	<table border="1" align="center">
		<tr>
			<th colspan="2">Add Employee</th>
		</tr>

		<tr>
			<th>Name</th>
			<th><input type="text" name="un" required></th>
		</tr>

		<tr>
			<th>Email</th>
			<th><input type="email" name="em" required></th>
		</tr>

		<tr>
			<th colspan="2"><input type="submit" name="sub"></th>
		</tr>
	</table>

	</form>

</body>
</html>