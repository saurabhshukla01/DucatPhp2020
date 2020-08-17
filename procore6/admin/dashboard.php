<?php

session_start();
$adminname = $_SESSION['aname'];
$adminemail = $_SESSION['aemail'];


if(empty($adminemail))
{
	// if user is not login
	header("location:index.php");
}

include("config/database.php");


$pageaccess = true;


?>
<html>
	<head>
		<title>Dashboard</title>
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
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
				  <li class="active"><a href="#">Home</a></li>
				  <li><a href="dashboard.php?page=cp">Change Password</a></li>
				  
				</ul>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome : <?=$adminname?> </a></li>
				  <li><a href="javascript:void()" data-toggle="modal" data-target="#logoutmodal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			  </div>
			</nav>
			</header>
			
			<div class="row">
				<aside class="col-sm-3">
					<div class="list-group">
					  <a href="dashboard.php?page=cat" class="list-group-item <?php if($_GET['page']  == "cat"){echo "active";} ?>">Category</a>
					  <a href="dashboard.php?page=pro" class="list-group-item <?php echo ($_GET['page']=="pro" ? "active" : ""); ?>">Product</a>
					  <a href="#" class="list-group-item">Order</a>
					  <a href="#" class="list-group-item">Feedback</a>
					</div>
				</aside>
				
				<section class="col-sm-9">
				
					<?php
						
						if(!empty($_GET['page']))
						{
							switch($_GET['page'])
							{
								case 'cat' : include("category.php");
											break;
											
								case 'pro' : include("product.php");
											break;
											
								case 'addpro' : include("addproduct.php");
												break;
												
								case 'cp' : include("changepassword.php");
											break;
							}
						}
					
					?>
				
				</section>
			</div>
		</main>
		
		
		

		<!-- Logout Modal -->
		<div id="logoutmodal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Are You Sure To Logout ? </h4>
			  </div>
			  
			  <div class="modal-footer">
			  
				<a href="logout.php"><button type="button" class="btn btn-danger">Yes, Sure</button></a>
				<button type="button" class="btn btn-success" data-dismiss="modal">No, Close</button>
				
			  </div>
			</div>

		  </div>
		</div>
		
	</body>
</html>