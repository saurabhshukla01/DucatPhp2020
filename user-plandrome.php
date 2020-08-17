<html>
    <head>
        <title> Check Plandrome or not </title>
    </head>
    <body>
        <form method="post">
            Enter Number : <input type="text" name="no" required>
            <input type="submit" name="sub" value="submit">
        </form>
    </body>
</html>


<?php

extract($_POST);

if(isset($sub))
{
    //echo "Submitted button";
    $pal = $no;
    $rev = 0;
    while($no >= 1)
    {
        $digit = $no % 10;
        $rev = $rev * 10 + $digit ;
        $no = $no / 10;
    }
    if($pal == $rev)
    {
        echo "The User input $pal is Palandrome Number";
    }
    else
    {
        echo "The User input $pal is not Palandrome Number";
    }
}
?>

