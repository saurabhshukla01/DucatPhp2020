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
          //echo "<strong>Connected Database connection</strong><hr>";

?>