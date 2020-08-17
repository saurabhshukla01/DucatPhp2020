<html>
	<head>
		<title>Dashboard</title>
		
		<link href="<?=base_url()?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<script src="<?=base_url()?>public/bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>
			
		<main>
			
			<header>
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand" href="#">WebSiteName</a>
					</div>
					<ul class="nav navbar-nav">
					  <li class="active"><a href="<?=base_url()?>Admin/dashboard">Home</a></li>
					  
					</ul>
					<ul class="nav navbar-nav navbar-right">
					  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome : <?=$this->session->userdata('aname');	?></a></li>
					  <li><a href="<?=base_url()?>Login/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
					</ul>
				  </div>
				</nav>
			</header>
			
			<div>
				<aside class="col-sm-3">
					<ul class="list-group">
					  <li class="list-group-item"><a href="<?=base_url()?>Admin/category">Category</a></li>
					  <li class="list-group-item"><a href="<?=base_url()?>Admin/product">Product</a></li> 
					  <li class="list-group-item"><a href="<?=base_url()?>Admin/slider">Slider</a></li> 
					</ul>
				</aside>
				
				<section class="col-sm-9">