<?php

extract($_POST);
if(isset($sub))
{
    $name = $_FILES['filename']['name'];
    $temp = $_FILES['filename']['tmp_name'];
    $size = $_FILES['filename']['size'];
    $type = $_FILES['filename']['type'];
    $error = $_FILES['filename']['error'];

    $i = 0;
	$count = 0;

	foreach($temp as $t)
	{
		if(move_uploaded_file($t,"Photos/".$name[$i]))
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
<title>Upload file</title>
<head>
</head>
<body bgcolor="yellow">
    <form method="post" enctype="multipart/form-data">
        Upload : <input type="file" multiple name="filename[]">
        <br>
        <input type="submit" name="sub" value="upload file">
    </form>
</body>
</html>