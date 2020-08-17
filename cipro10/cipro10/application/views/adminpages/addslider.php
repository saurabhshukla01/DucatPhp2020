<h2>Add Slider</h2>


<?php
// if error in slider insert
if($this->session->has_userdata('status'))
{
?>
	<label class="alert-info"><?=$this->session->userdata('status')?></label>
<?php
}


?>


<?= form_open_multipart("Admin/addslidersave") ?>
				

		<div class="form-group">
		<?= form_label("Title 1","",["class"=>"text-primary"]) ?>
		<?= form_input("t1",set_value('t1'),["class"=>"form-control"])?>	
		<?= form_error('t1') ?>
		</div>

		<div class="form-group">
		<?= form_label("Title 2","",["class"=>"text-primary"]) ?>
		<?= form_input("t2",set_value('t2'),["class"=>"form-control"])?>	
		<?= form_error('t2') ?>
		</div>

		<div class="form-group">
		<?= form_label("Image","",["class"=>"text-primary"]) ?>
		<?= form_upload("att","",["class"=>"form-control","placeholder"=>"Category Name"])?>	
		<?php
		if(isset($uploaderror))
		{
			echo "<label class='text-danger'>$uploaderror</label>";
		}
		?>
		</div>
		
		
		<div>
		<?= form_submit("sub","submit",["class"=>"btn btn-success"])?>
		</div>
					
				
	<?= form_close() ?>