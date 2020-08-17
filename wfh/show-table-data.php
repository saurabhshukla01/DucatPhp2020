<html>
<head>
<title>
Table of student
</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

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
    echo "<strong>Connected Database connection</strong><hr>";
    $sql = "Select * from student";
    $result = mysqli_query($conn,$sql);
    //$row = $result->num_rows();

?>

<body class="container">
    <h2 align="center" class="pt-2 pb-2">The Student Data Table Show </h2>
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Roll No</th>
              <th scope="col">Address</th>
              <th scope="col">Class</th>
            </tr>
          </thead>
          <tbody>
          <?php
              if (mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<th scope='row'>" . $row['id'] . "</th>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['rollno'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['class'] . "</td>";
                        echo "</tr>";
                    }
                }
          ?>
          </tbody>
        </table>
    </body>
</html>