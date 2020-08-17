<h2>Slider</h2>

<?php
// if slider added successfully
if($this->session->has_userdata('status'))
{
?>
	<label class="alert-info"><?=$this->session->userdata('status')?></label>
<?php
}


?>

<table class="table text-center">
	<tr>
		<th class="text-center" colspan="6"><a href="<?=base_url()?>Admin/addslider" class="btn btn-success">Add Slider</a></th>		
	</tr>

	<tr>
		<th class="text-center">S.No.</th>		
		<th class="text-center">Title1</th>
		<th class="text-center">Title2</th>
		<th class="text-center">Image</th>
		<th class="text-center">Date</th>
		<th class="text-center">Action</th>
	</tr>



	<?php

		$sn = 1;
		foreach($allslider as $s)
		{
		?>
			<tr>
				<td><?=$sn?></td>
				<td><?=$s['title1']?></td>
				<td><?=$s['title2']?></td>
				<td><img src="<?=base_url()?>uploads/slider/<?=$s['image']?>" height="30" width="80"></td>
				<td><?=$s['date']?></td>
				<td><a href="<?=base_url()?>Admin/updateslider/<?=$s['id']?>" class="btn btn-primary">Edit</a> <a href="<?=base_url()?>Admin/deleteslider/<?=$s['id']?>/<?=$s['image']?>" class="btn btn-danger">Delete</a></td>
			</tr>
		<?php
		$sn++;
		}

	?>



</table>