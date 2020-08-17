<?php 

$link = mysqli_connect("localhost","root","","6pm") or die(mysqli_connect_error());




// delete record

extract($_POST);

if(isset($delbtn))
{
	//print_r($delid);
	
	$deleteid = implode(',',$delid);
	
	if(mysqli_query($link,"delete from employee where id in($deleteid)"))
	{
		header("location:index.php");
	}
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Details</title>
</head>
<body>

	<form method="post">


	<table border="1" align="center">
		<tr>
			<th colspan="6"><a href="insert.php"><input type="button" value="Add Employee"></a></th>
		</tr>

		<tr>
			<th>S.No.</th>
			<th>Employee ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Date</th>
			<th><input type="submit" name="delbtn" value="Delete"></th>
		</tr>

		<?php 

			$result = mysqli_query($link,"select * from employee");

			$sn = 1;
			while($arr = mysqli_fetch_assoc($result))
			{
			?>
				<tr>
					<td><?=$sn?></td>
					<td><?=$arr['id']?></td>
					<td><?=$arr['name']?></td>
					<td><?=$arr['email']?></td>
					<td><?=$arr['date']?></td>
					<td><input type="checkbox" name="delid[]" value="<?php echo $arr['id'] ?>"></td>
				</tr>
			<?php
			$sn++;
			}

		 ?>

	</table>
	
	</form>

</body>
</html>