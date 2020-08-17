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