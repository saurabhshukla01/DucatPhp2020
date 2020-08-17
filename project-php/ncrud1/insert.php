<?php

include("database.php");

extract($_POST);

if(isset($sub))
{
	
	$fn = $_FILES['att']['name'];
	$tmp = $_FILES['att']['tmp_name'];
	
	$i = 0;
	foreach($tmp as $t)
	{		
		move_uploaded_file($t,"images/".$fn[$i]);
		$i++;		
	}
	
	
	
	$filenames = implode('|',$fn);
	
	
	if(mysqli_query($link,"insert into student(name,email,image) values ('$un','$em','$filenames')"))
	{
		header("location:index.php");
	}
	else
	{
		echo mysqli_error($link);
	}
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
</head>
<body>

	<form method="post" enctype="multipart/form-data">

	<table border="1" align="center">
		<tr>
			<th colspan="2">Add Student</th>
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
			<th>Image</th>
			<th><input type="file" name="att[]" multiple required></th>
		</tr>

		<tr>
			<th colspan="2"><input type="submit" name="sub"></th>
		</tr>
	</table>

	</form>

</body>
</html>