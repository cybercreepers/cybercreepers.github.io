<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>District Development Portal</title>
	
	<!-- Bootstrap style sheet -->
	<link href="<?php echo base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">
	<!-- css style sheet -->
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i%2cMontserrat:400,700%2cPT+Serif:400,400i,700,700i%2cPoppins:300,400,500,600,700%2cRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
</head>
<body>
		<header id="header" class="industry">
			<div class="header-container">
				<div class="logo" style="margin-top: 12px;width:50px"><strong class="title" style="font-size:16px;color:white">STUDENT'S CORNER </strong></div>
				
				<div class="right-bar">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li style="margin-left:100%"><a href="<?php echo site_url('login'); ?>">Login</a></li>
									
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
					</div>
			</div>
		</header>
		<div class="factory-banner industry">
			<div class="text-holder industry">
				<em>Welcome to District Development Portal</em>
				<strong class="title">Welcomes you </strong>
				<a href="https://en.wikipedia.org/wiki/List_of_districts_in_India"><strong class="title" style="font-size:15px"> District collectors of INDIA </strong></a>
			</div>
			<div id="carousel-example-generic11" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="<?php echo base_url('assets/') ?>images/steel2.jpg" width="1920" height="1070" alt="image" class="img">
					</div>
					<div class="item">
						<img src="<?php echo base_url('assets/') ?>images/steel3.jpg" width="1920" height="1070" alt="image" class="img">
					</div>
					<div class="item">
						<img src="<?php echo base_url('assets/') ?>images/steel1.jpg" width="1920" height="1070" alt="image" class="img">
					</div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic11" role="button" data-slide="prev">
					<span><img src="<?php echo base_url('assets/') ?>images/arrow-left.png" width="92" height="72" alt="arrow"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic11" role="button" data-slide="next">
					<span><img src="<?php echo base_url('assets/') ?>images/arrow-right.png" width="92" height="72" alt="arrow"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		
			
		</div>
		
		
		<div class="page-section">
			<div class="container">
			
				<div class="row">
					<section class="blog">
						<div class="text-holder">
							<h1>Problems &amp; Solutions</h1>
						</div>
				<?php if(!empty($all_data)){ $i=1;
						foreach($all_data as $data){
				?>
				<?php if($i%2==0){ ?><div class="row"> <?php } ?>
							<div class="col-sm-6 col-xs-12">
								
								<div class="blog-text">
									<strong>
										<p><?php echo $data['problem_details']; ?></p>
										<span>Shared by <?php echo $data['name']; ?></span>
										<span>on <?php echo date('d M Y',strtotime($data['shared_date'])) ?></span>
									</strong><br>
									<p><?php echo $data['solution']; ?></p>
									
								</div>
							</div>
					<?php if($i%2==0){ ?></div><?php } ?>
			
				<?php $i++; } } ?>
						
						
					</section>
				</div>
			</div>
		</div>
		
</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url('assets/') ?>js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/') ?>js/owl.carousel.js"></script>
	<script src="<?php echo base_url('assets/') ?>js/custom.js"></script>
	
</body>
</html>
