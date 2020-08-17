<?php

include("database.php");

extract($_POST);

if(isset($sub))
{
	$fn = $_FILES['att']['name'];
	$tmp = $_FILES['att']['tmp_name'];
	
	$arr = explode('.',$fn);
	$ext = end($arr);
	$ext = strtolower($ext);
	
	if($ext=="jpg" || $ext=="jpeg")
	{
		$fnn = uniqid().'.'.$ext;
		
		if(move_uploaded_file($tmp,"images/".$fnn))
		{
			if(mysqli_query($link,"insert into student (name,email,image) values ('$un','$em','$fnn')"))
			{
				header("location:index.php");
			}
			else
			{
				unlink("images/".$fnn);
				echo mysqli_error($link);				
			}
		}
		else
		{
			echo "File Upload Error";
		}
	}
	else
	{
		echo "Only jpg or jpeg file support";
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
			<th><input type="file" name="att" required></th>
		</tr>

		<tr>
			<th colspan="2"><input type="submit" name="sub"></th>
		</tr>
	</table>

	</form>

</body>
</html>