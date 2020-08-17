<?php

$eid = $_GET['editid']; // get from urldecode

include("database.php");

// get data from table by id
$result = mysqli_query($link,"select * from student where id='$eid'");

$arr = mysqli_fetch_assoc($result);

$oldimage = $arr['image'];





// update record


extract($_POST);

if(isset($sub))
{
	$fn = $_FILES['att']['name'];
	$tmp = $_FILES['att']['tmp_name'];
	
	
	if(empty($fn))
	{
		//echo "Update only data";
		
		if(mysqli_query($link,"update student set name='$un', email='$em' where id='$eid'"))
		{
			header("location:index.php");
		}
		else
		{
			echo mysqli_error($link);			
		}
	}
	else
	{
		//echo "Update File and Data";
		
		$arr = explode('.',$fn);
		$ext = end($arr);
		$ext = strtolower($ext);
		
		if($ext=="jpg" || $ext=="jpeg")
		{
			$fnn = rand().'.'.$ext;
			
			if(move_uploaded_file($tmp,"images/".$fnn))
			{
				if(mysqli_query($link,"update student set name='$un',email='$em',image='$fnn' where id='$eid'"))
				{
					unlink("images/".$oldimage);
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
			echo "Support Only jpg or jpeg file";
		}
	}
	
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
</head>
<body>

	<form method="post" enctype="multipart/form-data">

	<table border="1" align="center">
		<tr>
			<th colspan="2">Edit Student</th>
		</tr>

		<tr>
			<th>Name</th>
			<th><input type="text" name="un" value="<?= $arr['name'] ?>" required></th>
		</tr>

		<tr>
			<th>Email</th>
			<th><input type="email" name="em" value="<?= $arr['email'] ?>" required></th>
		</tr>
		
		<tr>
			<th>Image</th>
			<th><input type="file" name="att"></th>
		</tr>

		<tr>
			<th colspan="2"><input type="submit" name="sub"></th>
		</tr>
	</table>

	</form>

</body>
</html>