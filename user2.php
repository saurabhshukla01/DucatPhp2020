<html>
    <head>
        <title> Title of Php</title>
    </head>
    <body>
        <form method="post">
            Enter User Name : <input type="text" name="un">
            <br>
            Enter User Email : <input type="text" name="em">
            <br>
            Enter User Salary : <input type="text" name="sal">
            <br><br>
            <input type="submit" name="sub" value="submit">
        </form>
    </body>
</html>

<?php

extract($_POST);

if(isset($sub))
{
    echo "User name is : ".$un."<br>";
    echo "User Email is : ".$em."<br>";
    echo "User Salary is : ".$sal."<br>";
    echo "Data is submit successfully ...";
}

?>