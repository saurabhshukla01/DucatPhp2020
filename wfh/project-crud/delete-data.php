<?php
session_start();
if(isset($_SESSION['email']))
{
?>
<?php include('dbcon.php'); ?>
<?php include('common/header.php'); ?>
<?php
         if(isset($_POST['del']))
                {
                     $id = $_GET['id'];
                     echo "Your Id is ".$id;
                     $sql = "Delete from insertdb Where id=$id";
                     $result = mysqli_query($conn,$sql);

                     if($result === TRUE)
                        {
                            echo "<br> Record Deleted Successfully <br>";
                            header('location:show-data.php');
                        }
                         else
                             {
                                 echo "<br>Please Try again data in not Deleted<br>";
                             }

                }
 ?>
<?php include('common/footer.php'); ?>
<?php
}
else
{
    header("location:index.php");
}
?>