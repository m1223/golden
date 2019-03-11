<?php include 'include/function.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>web</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-inverse mynavbar" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">mhm</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">visit website</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">user <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="index.php?page=admin/creat/index.php">create account</a></li>
							<li><a href="#">login</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<!--- end nav -->

	<div class="part-holder">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 leftpart">
					<div class="i">
						<p><span class="glyphicon glyphicon-leaf"></span></p>
					</div>
					<div class="list-group">
						<a href="index.php" class="list-group-item">dashboard</a>
						<a href="index.php?page=admin/catagory/index.php" class="list-group-item">catagory</a>
						<a href="index.php?page=admin/product/index.php" class="list-group-item">product</a>
						<a href="#" class="list-group-item">store</a>
						<a href="#" class="list-group-item">user</a>
					</div>
				</div>
				<div class="col-md-10 rightpart">
					<?php if(isset($_GET['page'])) { ?> 
						<?php include $_GET['page']; ?>
						
					<?php }else{
						include 'admin/home.php';
					} ?>
				</div>
			</div>
		</div>
	</div>




<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>