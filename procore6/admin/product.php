
<?php

if($pageaccess != true)
{
	// if dashboard is not open, page access true set on dashboard page
	header("location:dashboard.php");
}

?>
<h2 class="text-info">Product</h2>

<?php

if(isset($_SESSION['status']))
{
?>
	<label class="alert-info"><?=$_SESSION['status']?></label>
<?php
	unset($_SESSION['status']);
}


?>

<table class="table">
						<tr>
							<th colspan=8 class="text-center"><a href="dashboard.php?page=addpro" class="btn btn-success">Add Product</a></th>
						</tr>
						
						<tr>
							<th>S.No.</th>
							<th>Category</th>
							<th>Product Name</th>
							<th>Image</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Discount</th>
							<th>Action</th>
						</tr>
						
						
						
						<?php
						
						$result = mysqli_query($link,"select category.cname, product.* from product inner join category on category.id = product.procat");
						
						$sn=1;
						while($arr = mysqli_fetch_assoc($result))
						{
						?>
							<tr>
								<td style="vertical-align:middle;"><?=$sn?></td>
								<td style="vertical-align:middle;"><?=$arr['cname']?></td>
								<td style="vertical-align:middle;"><?=$arr['mobile_name']?></td>
								<td><img src="images/product/<?=$arr['image']?>" height="100" width="60"></td>
								<td style="vertical-align:middle;">Rs <?= $arr['price'] ?>/-</td>
								<td style="vertical-align:middle;"><?= $arr['quantity'] ?></td>
								<td style="vertical-align:middle;"><?=$arr['discount']?>%</td>
								<td style="vertical-align:middle;"><a href="" class="btn btn-info">Edit</a> <a href="" class="btn btn-danger">Delete</a></td>
							</tr>
						<?php
						$sn++;
						}				
						
						
						?>
						
						
						
						
						
						
						
				
				
</table>