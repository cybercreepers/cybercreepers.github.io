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
                <h2>Problems<small class="text-muted"></small></h2>
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
			  <?php if($this->session->userdata('user_role_id')==1){ ?>
             <div class="card-content">
                <h5 class="title grey-text text-darken-2">Problems List</h5>
             <a href="<?php echo site_url('Problems/new_problem'); ?>"> <button class="btn" style="background-color:green;margin-left:80%">Post New Problem</button></a>
              </div>
			  <?php } ?>
                    <div class="body">
                        <div class="table-responsive social_media_table">
                            <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.No</th>
                                        <th class="text-center">Department</th>
                                        <th class="text-center">Problem</th>                                                                                
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php if(empty($problems)){ ?>
									<tr>
									    <td colspan="3">No data found</td>
									</tr>
									<?php }else{ $i=1;
										        foreach($problems as $p){  ?>
													<tr>
														<td><?php echo $i; ?></td>
														<td><?php echo ucfirst($p['department']); ?></td>
														<td><?php echo $p['problem']; ?></td>
														<td>
														<?php if($this->session->userdata('user_role_id')==1)  { ?>
															<?php if($p['solutions']==0){ ?><span style="color:blue">No Suggestion</span><?php } ?>
															<?php if($p['solutions']>0){ ?><a href="<?php echo site_url('problems/all_solutions/'.$p['problem_id']); ?>"><button type="button" class="btn btn-info"><?php echo $p['solutions'];?> Suggestions</button></a><?php } ?>
														<?php } if($this->session->userdata('user_role_id')==2)  { ?>
														<?php if($p['pending']==0){ ?><span style="color:blue">No suggestion need to approve</span><?php } ?>
														<?php if($p['pending']>0){ ?><a href="<?php echo site_url('problems/all_solutions/'.$p['problem_id']); ?>"><button type="button" class="btn btn-info"><?php echo $p['pending'];?> Pending</button></a><?php } ?>
														<?php } if($this->session->userdata('user_role_id')==3){ ?>
														
														<a href="<?php echo site_url('problems/new_solution/'.$p['problem_id']); ?>"><button type="button" class="btn btn-primary">New Suggestion</button></a>
														
														<?php } ?>
														</td>
													</tr>		
												
												<?php  $i++; } } ?>
                                </tbody>
                            </table>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>
      <br>
      <br>
      
      
    </div>
</section>
   </body></html>
	
	<style>
	.index2 section.content {
		margin : 0px 0px 0px 0px !important
	}
	</style>