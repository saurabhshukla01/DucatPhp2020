<html>
	<head>
		<title>Login Panel</title>
		
		<link href="<?=base_url()?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<script src="<?=base_url()?>public/bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>
		<main>
			
			<header class="jumbotron"><h1 class="text-center">Admin Panel</h1></header>
						
			<section class="container">
			
			<?php 

			if($this->session->has_userdata('status'))
			{
			?>
				<label class="alert-danger"><?=$this->session->userdata('status')?></label>
			<?php
			}
			
			 ?>


							
				<?= form_open() ?>
				
					<div class="form-group">
						<?= form_label("Email") ?>
						<?= form_input("em","",["class"=>"form-control","placeholder"=>"Enter Email"])?>
					</div>
					
					<div class="form-group">
						<?= form_label("Password") ?>
						<?= form_password("pass","",["class"=>"form-control","placeholder"=>"Enter Password"])?>
					</div>
					
					<div>
						<?= form_submit("sub","Login",["class"=>"btn btn-success"])?>
					</div>
					
				
				<?= form_close() ?>
			
			</section>
		
		</main>
	</body>
</html>