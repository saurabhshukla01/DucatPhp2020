<?php
session_start();
if(isset($_SESSION['email']))
{
?>
<?php include('dbcon.php'); ?>
<?php include('common/header.php'); ?>


   <body class="container-flud" style="background-color: skyblue; margin:15px;">
      <div class="row">
       <div class="col-sm-12">
         <center><strong class="pt-2 pb-2 font-weight-bold" style="font-size:30px ; font-family:cursive ; color : blue;">
         Show Employee Data Into Table </strong></center>
         <table class="table table-bordered" style="background-color: red ; color : yellow ;">
            <?php
               $sql = "Select * from insertdb";
               $result = mysqli_query($conn,$sql);

               ?>
            <thead>
               <tr>
                  <th scope="col">Sr no.</th>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Mobile No</th>
                  <th scope="col">Email</th>
                  <th scope="col">Job Title</th>
                  <th scope="col">Salary</th>
                  <th scope="col">Address</th>
                  <th scope="col">Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  if (mysqli_num_rows($result) > 0)
                  {
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result))
                        {
                            //echo $i;
                        ?>
               <tr>
                  <td> <?php echo $i ; ?> </td>
                  <td> <?php echo $row['id'] ; ?> </td>
                  <td> <?php echo $row['name'] ; ?> </td>
                  <td> <?php echo $row['mobile'] ; ?> </td>
                  <td> <?php echo $row['email'] ; ?> </td>
                  <td> <?php echo $row['job_title'] ; ?> </td>
                  <td> <?php echo $row['salary'] ; ?> </td>
                  <td> <?php echo $row['address'] ; ?> </td>
                  <td colspan="4">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                            <span>
                                <button class="btn btn-primary" onclick="window.location.href='add-data.php'">
                                <i class="fa fa-plus-square" aria-hidden="true" title="Add Data"></i></button>
                            <span>
                            <span>
                                <button class="btn btn-warning" onclick="window.location.href='show-data.php'">
                                <i class="fa fa-eye" aria-hidden="true" title="Show Data"></i></button>
                            </span>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="Second group">
                             <form action="update-data.php?id=<?php echo $row['id']; ?>" method="POST">
                                <button type="submit" class="btn btn-info" id="update" name="update"  title="Update Data">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                             </form>
                         </div>
                         <div class="btn-group mr-2" role="group" aria-label="Third group">
                             <form action="delete-data.php?id=<?php echo $row['id']; ?>" method="POST">
                                <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                                <button type="submit" id="del" name="del" class="btn btn-danger" title="Delete data">
                                <i class="fa fa-recycle" aria-hidden="true"></i></button>
                             </form>
                         </div>
                    </div>
                  </td>
               </tr>
               <?php
                  $i++;
                  }
                  }
                  else
                  {
                  echo "<br><b>NO recoard Data </b><br>";
                  }

                  ?>
            </tbody>
         </table>
         </div>
         </div>
    </body>
<?php include('common/footer.php'); ?>
<?php
}
else
{
    header("location:index.php");
}
?>




