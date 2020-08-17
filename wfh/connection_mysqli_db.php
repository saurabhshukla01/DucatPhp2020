<?php
// show database data in browser with connected database using mysqli connection ==>
// database name =>  Ducatwfh_db , table name  :  student ;

$db_host = "localhost";
$db_name = "Ducatwfh_db";
$db_usr = "root";
$db_password = "";

$conn = mysqli_connect($db_host,$db_usr,$db_password,$db_name);
if(!$conn)
{
    die("Database Not connected Please Try server is not connected");
}
    echo "Connected Database connection <hr>";
    $sql = "Select * from student";
    $result = mysqli_query($conn,$sql);
    //$row = $result->num_rows();
    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<b> ID : </b>".$row['id']. "  ===  ";
            echo "<b> Name : </b>".$row['name']. "  ===  ";
            echo "<b> Roll No : </b>".$row['rollno']. "  ===  ";
            echo "<b> Address : </b>".$row['address']. "  ===  ";
            echo "<b> Class : </b>".$row['class'];
            echo "<br><br>";
        }
    }


?>