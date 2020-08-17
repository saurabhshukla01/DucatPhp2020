<html>
    <head>
        <title> Table of No </title>
    </head>
    <body>
        <form method="post">
            Enter Number Find table : <input type="text" name="no">
            <input type="submit" name="sub" value="submit">
        </form>
    </body>
</html>

<?php

// extract($_POST);
// if(isset($sub))

if(isset($_POST['sub']))
{
    $num = $_POST['no'];
    echo "User Input no is $num table is : <br>";
    for($i=1;$i<=10;$i++)
    {
        $t = $num * $i;
        echo $t."  ";
    }
}

?>


<center><h3> Next code Consider another page </h3></center>



<html>
    <head>
        <title> Table of No </title>
    </head>
    <body>
        <form method="post" action="table_post.php">
            Enter Number Find table : <input type="text" name="no">
            <input type="submit" name="sub" value="submit">
        </form>
    </body>
</html>





