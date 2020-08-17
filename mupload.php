<?php

extract($_POST);

if(isset($sub))
{
	$fn = $_FILES['att']['name'];
	$tmp = $_FILES['att']['tmp_name'];
	
	//echo "<pre>";
	//print_r($fn);
	//print_r($tmp);
	//echo "</pre>";
	
	$i = 0;
	$count = 0;
	
	foreach($tmp as $t)
	{
		if(move_uploaded_file($t,"images/".$fn[$i]))
		{
			$count++;
		}
		$i++;
	}
	
	if($count > 0)
	{
		echo "File Upload Successfully";
	}
}



?>
<html>
	<head>
		<title>File Uploading</title>
	</head>

	<body>
		<form method="post" enctype="multipart/form-data">
			
			Upload : <input type="file" name="att[]" multiple required>
			<br>
			<input type="submit" name="sub" value="Submit">
			
		</form>
	</body>
</html>