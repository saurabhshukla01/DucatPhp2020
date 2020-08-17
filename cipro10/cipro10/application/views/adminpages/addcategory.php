<h2>Add Category</h2>

<?php
// if error in category insert
if($this->session->has_userdata('status'))
{
?>
	<label class="alert-info"><?=$this->session->userdata('status')?></label>
<?php
}


?>




	<!-- Display Error of All Fields In Form -->
	<?php echo validation_errors('<div class="text-danger">', '</div>'); ?> 



	<main>
	<?= form_open() ?>
				
		<div class="form-group">
		<?= form_label("Category Name","",["class"=>"text-primary"]) ?>
		<?= form_input("cn",set_value('cn'),["class"=>"form-control","placeholder"=>"Category Name"])?>

		<!-- Display Error Of Particular Field -->
		<?php echo form_error('cn', '<div class="text-danger">', '</div>'); ?>
		</div>
		
		
		<div>
		<?= form_submit("sub","submit",["class"=>"btn btn-success"])?>
		</div>
					
				
	<?= form_close() ?>
	</main>