<h2>Category</h2>

<?php
// if category added successfully
if($this->session->has_userdata('status'))
{
?>
	<label class="alert-info"><?=$this->session->userdata('status')?></label>
<?php
}


?>



<table class="table text-center">
	<tr>
		<th class="text-center" colspan="4"><a href="<?=base_url()?>Admin/addcategory" class="btn btn-success">Add Category</a></th>		
	</tr>

	<tr>
		<th class="text-center">S.No.</th>
		<th class="text-center">Category Name</th>
		<th class="text-center">Date</th>
		<th class="text-center">Action</th>
	</tr>


	<?php
	$sn=1;
	foreach($catdata as $cat)
	{
	?>
		<tr>
			<td><?=$sn?></td>
			<td><?=$cat['cname']?></td>
			<td><?=$cat['date']?></td>
			<td><a href="<?=base_url()?>/Admin/editcategoryview/<?=$cat['id']?>" class="btn btn-info">Edit</a> <a href="<?=base_url()?>Admin/deletecategory/<?=$cat['id']?>" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete ?')">Delete</a></td>
		</tr>
	<?php

		$sn++;
	}


	?>

</table>