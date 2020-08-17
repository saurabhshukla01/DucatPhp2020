<?php

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
		$fnn = rand().'.'.$ext;
		//$fnn = uniqid().'.'.$ext;
		//$fnn = rand().$fn;

		if(move_uploaded_file($tmp,"images/".$fnn))
		{
			echo "File Upload Successfully";
		}	
	}
	else
	{
		echo "Only jpg or jpeg file support";
	}
}


?>
<html>
	<head>
		<title>File Uploading</title>
	</head>

	<body>
		<form method="post" enctype="multipart/form-data">
			
			Upload : <input type="file" name="att" required>
			<br>
			<input type="submit" name="sub" value="Submit">
			
		</form>
	</body>
</html>