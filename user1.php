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

if(isset($_POST['sub']))
{
    $username = $_POST['un'];
    $useremail = $_POST['em'];
    $usersalary = $_POST['sal'];
    echo "User name is : ".$username."<br>";
    echo "User Email is : ".$useremail."<br>";
    echo "User Salary is : ".$usersalary."<br>";
    echo "Data is submit successfully ...";
}

?>