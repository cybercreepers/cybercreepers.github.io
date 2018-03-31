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
			   <a  href="<?php echo site_url('problems/index'); ?>" class="btn" style="width:80px;margin-left:80%;margin-top:10px">Back</a>	
			        <div class="body"><br><br><br><br>
					<div class="row">
					<h3>Problem Details</h3>
						<div class="col-sm-12">
							<div class="blog-text" style="border-style: outset;">
									<strong><span><?php echo $problem['problem']; ?></span></strong><br>
									<p style="min-height: 75px;"><br><?php echo $problem['problem_details'] ?></p><br>
									<a  download href="<?php echo base_url('assets/files/').$problem['file'] ?>"><span>Download Attachment </span></a><br><br>
							</div>
						</div>
					</div>
					<br><br>
					<h3>Solutions</h3>
					<?php if($this->session->userdata('user_role_id')==2){
								$action = site_url('problems/approve_solution');
							}else{
								$action = site_url('problems/solution_feedback');
							}?>
					<form name="solution" method="post" action="<?php echo $action; ?>">
                         <?php if(!empty($all_solutions)){ 
								foreach($all_solutions as $all){
									if($this->session->userdata('user_role_id')==2 && $all['is_approved']=='0'){
									?>
								
							<div class="row">
							<div class="col-sm-12">
								
								<div class="blog-text">
									<strong><span>Shared by <?php echo $all['name'] ?></span>
									<span> on <?php echo date('d M Y',strtotime($all['created_at'])) ?></span></strong><br>
									<p style="border-style: outset;min-height: 200px;"><br><?php echo $all['solution']; ?></p>
							    </div>
								<div class="col-md-10">
									<label class="col-md-3">Approve</small></label>
									<div class="form-group col-md-1">                                
										<input type="checkbox" id="approve" class="form-control" name="approve[]" value="<?php echo $all['solution_id'] ?>"><br>
										<input type="hidden" id="problem_id" class="form-control" name="problem_id[]" value="<?php echo $all['problem_id'] ?>"><br>
										<input type="hidden" id="problem_id" class="form-control" name="solution_id[]" value="<?php echo $all['solution_id'] ?>"><br>
									</div>
								</div>
								</div>
							</div><br><br>	
								<?php  } ?>
							
							<?php  if($this->session->userdata('user_role_id')==1 && $all['is_approved']=='1'){  ?>
						
									<div class="row">
										<div class="col-sm-12">
											
											<div class="blog-text">
												<strong><span>Shared by <?php echo $all['name'] ?></span>
												<span> on <?php echo date('d M Y',strtotime($all['created_at'])) ?></span></strong><br>
												<p style="border-style: outset;min-height: 200px;"><br><?php echo $all['solution']; ?></p>
											</div>
										</div>
									</div> <br><br>
									<div class="col-md-10">
									<label class="col-md-2">Feedback</small></label>
									<div class="form-group col-md-8	"> 
										<textarea class="form-group" name="feedback[]" style="width:100%;height:100px"><?php echo $all['feedback'] ?></textarea>									
										<input type="hidden" id="problem_id" class="form-control" name="problem_id[]" value="<?php echo $all['problem_id'] ?>"><br>
										<input type="hidden" id="problem_id" class="form-control" name="solution_id[]" value="<?php echo $all['solution_id'] ?>"><br>
									</div>
								</div><br><br><br>
							<?php  } ?>
						<?php } }?>
						
						<div class="col-md-10">
							<div class="form-group col-md-offset-3 col-md-6">                                
							<input type="submit" class="btn" style="background-color:green;width:80px" value="Save">
							<a  href="<?php echo site_url('problems/index'); ?>" class="btn" style="background-color:red;width:80px">Cancel</a>
							</div>
							
						</div>
						</form>
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
	
	
	