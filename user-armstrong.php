<html>
    <head>
        <title> Find the armstrong Number </title>
    </head>
    <body>
        <form method="post">
            Enter Number if you want to find armstrong number or not : <input type="text" name="no" value="" required>
            <input type="submit" name="sub" value="submit">
        </form>
    </body>
</html>

<?php

extract($_POST);
// print_r($_POST);
if(isset($sub))
{
    $num =  $no;
    $arm = 0;
    while($no!=0)
    {
        $dig = $no %10;
        $arm = $arm + $dig ** 3;
        $no = $no /10;
    }
    echo "I find $num armstrong no is $arm<br>";
    echo "<b>How to check it is correct or not then : </b><br>";
    if($num == $arm)
    {
        echo "Given no $num is a armstrong number.<br>";
    }
    else
    {
        echo "Given no $num is not a armstrong number.<br>";
    }

}


?>