<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <title>District Development Portal</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
     <link href="<?php echo base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">
	<!-- css style sheet -->
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i%2cMontserrat:400,700%2cPT+Serif:400,400i,700,700i%2cPoppins:300,400,500,600,700%2cRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url('assets/') ?>css/login3.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL SCRIPTS -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            
        </div>
        <!-- END LOGO -->
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="menu-toggler sidebar-toggler">
        </div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="<?php echo site_url('login/login_process'); ?>" method="post">
                <h3 class="form-title">Login to Portal</h3>
				<?php if($this->session->flashdata('error_msg')){ ?>
					<div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>
                        <span><?php echo $this->session->flashdata('error_msg');; ?></span>
                    </div>
				<?php } ?>
				<div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <div class="input-icon">
                        <input class="form-control placeholder-no-fix"  type="text" name="username" id="username"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                       
                        <input class="form-control placeholder-no-fix" type="password"  name="password"/>
                    </div>
                </div>
                <div class="form-actions">
                    <label class="checkbox">
                        <button type="submit" class="btn primary-btn">Login <i class="m-icon-swapright m-icon-white"></i></button>
				</div>
			</form>
        </div>
        
    </body>
    <!-- END BODY -->
</html>