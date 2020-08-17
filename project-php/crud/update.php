<?php

$eid = $_GET['editid'];	// get from url


// get record from table by id
$link = mysqli_connect("localhost","root","","6pm") or die(mysqli_connect_error());

$result = mysqli_query($link,"select * from employee where id='$eid'");
$arr = mysqli_fetch_assoc($result);

//print_r($arr);

// update record

extract($_POST);

if(isset($sub))
{
	if(mysqli_query($link,"update employee set name='$un', email='$em' where id='$eid'"))
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
	<title>Edit Employee</title>
</head>
<body>

	<form method="post">

	<table border="1" align="center">
		<tr>
			<th colspan="2">Edit Employee</th>
		</tr>

		<tr>
			<th>Name</th>
			<th><input type="text" name="un" value="<?php echo $arr['name']?>" required></th>
		</tr>

		<tr>
			<th>Email</th>
			<th><input type="email" name="em" value="<?php echo $arr['email'] ?>" required></th>
		</tr>

		<tr>
			<th colspan="2"><input type="submit" name="sub"></th>
		</tr>
	</table>

	</form>

</body>
</html>