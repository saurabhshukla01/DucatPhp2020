<?php

extract($_POST);
if(isset($sub))
{
    $name = $_FILES['filename']['name'];
    $temp = $_FILES['filename']['tmp_name'];
    $size = $_FILES['filename']['size'];
    $type = $_FILES['filename']['type'];
    $error = $_FILES['filename']['error'];

    echo "<h5>";
    echo "Images name : ". $name .'<br>';
    echo "Images Temp name : ". $temp .'<br>';
    echo "Images size : " . $size .'<br>';
    echo "Images Type : " . $type .'<br>';
    echo "Images of error : " . $temp .'<br>';
    echo "<h5>";

    echo "<br><br>";
    // images name :  name + '.' + ext .

    $arr = explode('.',$name);
    $ext = end($arr);
    $ext = strtolower($ext);
    //echo $ext;
    if($ext == "jpeg" || $ext == "jpg")
    {
        //$fnname = $name;
        //$fnname = rand().'.'.$ext;
        //$fnname = rand().rand().'.'.$ext;
        //$fnname = uniqid().'.'.$ext;
        $fnname = $arr[0] . rand().'.'.$ext;
        if(move_uploaded_file($temp , "Photos/".$fnname))
        {
            echo "<br><h2>Images upload successfully<h2><br>";
        }
    }
    else
    {
        echo "<br><h2>Only allows to jpeg && jpg file images<h2><br>";
    }
}

?>

<html>
<title>Upload file</title>
<head>
</head>
<body bgcolor="yellow">
    <form method="post" enctype="multipart/form-data">
        Upload : <input type="file" name="filename">
        <br>
        <input type="submit" name="sub" value="upload file">
    </form>
</body>
</html>