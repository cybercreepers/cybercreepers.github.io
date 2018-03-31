<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>District Development Portal</title>
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/main.css">
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/hm-style.css">
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/color_skins.css">
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/font-awesome.css">
     
</head>

<body class="theme-cyan index2" cz-shortcut-listen="true" style="overflow: auto;">



<!-- Chat-launcher -->

<section class="content">
    <div class="block-header container">
	<br>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Solution<small class="text-muted"></small></h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                
                <ul class="breadcrumb float-md-right">
                    
                  <a href="<?php echo site_url('Login/logout'); ?>"> <li class="breadcrumb-item active" style="margin-left:100%"><strong>Logout</strong>	</li></a>
                </ul>
            </div>
        </div>
    </div>
    <br>
    
    <div class="container">
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card shawdow">
                   <div class="card-header primary-bg dark z-depth-2"><i class="fa fa-user"></i>
                   
              </div>
			        <div class="body">
					<h4>Problem Details</h4>
					<div class="row">
						<div class="col-sm-12">
							<div class="blog-text" style="border-style: outset;">
									<strong><span><?php echo $problem['problem']; ?></span></strong><br>
									<p style="min-height: 75px;"><br><?php echo $problem['problem_details'] ?></p><br>
									<a  download href="<?php echo base_url('assets/files/').$problem['file'] ?>"><span>Download Attachment </span></a><br><br>
							</div>
						</div>
					</div>
					
					<br><br><br><br>
					<h4>Share your Idea</h4><br>				
                         <form style="height:250px" name="solution_form" method="post" id="solution_form" action="<?php echo site_url('problems/new_solution'); ?>" enctype="multipart/form-data">
						<div class="col-md-10">
							<label class="col-md-3">Solution</label>
							<div class="form-group col-md-6">                                
								<textarea class="form-group" name="solution" style="width:100%;height:100px"></textarea>
							</div>
						</div>
						<div class="col-md-10">
							<label class="col-md-3">Attachment<small> (If any)</small></label>
							<div class="form-group col-md-6">                                
								<input type="file" id="attachment" class="form-control" name="userfile"><br>
								<input type="hidden" value="<?php echo $problem_id; ?>" id="problem_id" class="form-control" name="problem_id"><br>
							</div>
						</div>	
						<div class="col-md-10">
							<div class="form-group col-md-offset-3 col-md-6">                                
							<input type="submit" class="btn" style="background-color:green;width:80px" value="Save">
							<a  href="<?php echo site_url('problems/index'); ?>" class="btn" style="background-color:red;width:80px">Cancel</a>
							</div>
							
						</div>
                        </form>
						<br><br><br>
                    </div>
                </div>
            </div>
        </div>
      <br>
      <br>
      
      
    </div>
</section>
 <script src="<?php echo base_url('assets/'); ?>js/jquery.min.js" type="text/javascript"></script>
 <script src="<?php echo base_url('assets/'); ?>js/jquery.validate.js" type="text/javascript"></script>
</body></html>
	
	<style>
	.index2 section.content {
		margin : 0px 0px 0px 0px !important
	}
	.form-control{
		border-radius : 0px;
	}
		.form-control{
		border-radius : 0px;
	}
	.error{
		color:red;
	}
	</style>
	
	<script>
	$('document').ready(function ()
	{
		$('#solution_form').validate({
			rules: {
				"solution": "required",
			},
			messages: {
				"solution": "Please metion your idea",
			},

			errorPlacement: function (error, element)
			{
				// Add the `help-block` class to the error element
				error.addClass("help-block");

				// Add `has-feedback` class to the parent div.form-group
				// in order to add icons to inputs
				element.parents(".col-sm-5").addClass("has-feedback");

				error.insertAfter(element);
			}
		});
        
	});

</script>