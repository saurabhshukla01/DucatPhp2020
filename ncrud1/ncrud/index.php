<?php

include("database.php");




// delete record

if(isset($_GET['delid']))
{
	$did = $_GET['delid'];
	$dimg = $_GET['delimg'];
	
	
	//$result = mysqli_query($link,"select * from student where id='$did'");
	//$arr = mysqli_fetch_assoc($result);
	//$dimg = $arr['image'];
	
	
	
	mysqli_query($link,"delete from student where id='$did'");
	unlink("images/".$dimg);
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
</head>
<body>

	<table border="1" align="center">
		<tr>
			<th colspan="6"><a href="insert.php"><input type="button" value="Add Student"></a></th>
		</tr>

		<tr>
			<th>S.No.</th>
			<th>Student ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Image</th>
			<th>Date</th>
			
		</tr>
		
		<?php
		
			$result = mysqli_query($link,"select * from student");
			
			$sn = 1;
			while($arr = mysqli_fetch_assoc($result))
			{
				
			$files = explode('|',$arr['image']);
		?>
				<tr>
					<td><?php echo $sn ?></td>
					<td><?php echo $arr['id'] ?></td>
					<td><?php echo $arr['name'] ?></td>
					<td><?= $arr['email'] ?></td>
					<td>
						<?php
							foreach($files as $f)
							{
							?>
								<img src="images/<?=$f?>" height="30" width="80">
							<?php
							}
						?>
					</td>
					<td><?= $arr['date'] ?></td>					
					
				</tr>
		<?php
			$sn++;
			}
		
		?>

	</table>

</body>
</html>