<!Doctype html>
<html>
	<head>
		<script src="<?php base_url();?>assets/js/jquery.js" type="text/javascript"></script>
		<script src="<?php base_url();?>assets/js/main.js" type="text/javascript"></script>
		<script src="<?php base_url();?>assets/js/jquery-ui.js" type="text/javascript"></script>
		<link href="<?php base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="<?php base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="<?php base_url();?>assets/css/main.css" rel="stylesheet" type="text/css" />
		<link href="<?php base_url();?>assets/css/jquery-ui.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 home_bg left">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center pradaxa_header white content_down" >Stroke Prevention in non-valvular atrial fibrillation</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 left">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content_down left">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><img src="assets/images/Home/Calc-1.png" class="home_img" alt="Stroke Risk Calculator" /></div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><img src="assets/images/Home/Calc-2.png" class="home_img" alt="Bleeding Risk" /></div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><img src="assets/images/Home/Calc-3.png" class="home_img" alt="Renal Function" /></div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><img src="assets/images/Home/Calc-4.png" class="home_img" alt="Pradaxa Dosing and Administration" /></div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content_down left">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><img src="assets/images/Home/elec_sgry.png" class="home_img" alt="Stroke Risk Calculator" /></div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><img src="assets/images/Home/emergency.png" class="home_img" alt="Bleeding Risk" /></div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><img src="assets/images/Home/Calc-3.png" class="home_img" alt="Renal Function" /></div>
				</div>					
			</div>		
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 content_down left">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 home_res_1 no_padding"><div></div><img src="assets/images/Home/res-1.png" class="home_res right" alt="Pradaxa Patient" /></div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content_down home_res_2 no_padding"><img src="assets/images/Home/res-2.png" class="home_res" alt="Pradaxa HCP" /></div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content_down home_res_3 no_padding"><img src="assets/images/Home/res-3.png" class="home_res right" alt="RACGP accredited Education Modules" /></div>
				</div>
			</div>
		</div>
		<a href="javascript:void(0);" id="update_link">Update Application</a>
		<div id="dlgPopUpForm"><?php $this->load->view('appUpdates.php'); ?></div>
	</body>
</html>