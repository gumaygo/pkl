

<center> 

<link href="<?php echo base_url('/assets/'); ?>bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?php echo base_url('/assets/'); ?>bootstrap.min.js"></script>
<script src="<?php echo base_url('/assets/'); ?>jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url('/assets/'); ?>a.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/'); ?>a.css">
<!------ Include the above in your HEAD tag ---------->

<!-- All the files that are required -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url('/assets/'); ?>jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


<div class="text-center" style="padding:50px 0">
	<div class="logo">forgot password</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form action="<?php echo base_url('login/reset'); ?>" method="post" id="forgot-password-form" class="text-left">
			<div class="etc-login-form">
				<p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p>
			</div>
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="fp_email" class="sr-only">Email address</label>
						<input type="text" class="form-control" id="fp_email" name="email" placeholder="email address">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="<?php echo base_url('/login/'); ?>">login here</a></p>
				<p>new user? <a href="<?php echo base_url('/login/register/'); ?>">create new account</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>


</center>