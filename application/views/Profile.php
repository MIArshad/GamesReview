<html>
<head>
	<title>Profile</title>
	<!-- load in bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="#">Pomegranate Games - A Games Review Website</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url();?>index.php/home">Home
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url() ?>index.php/chat">Chat</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>index.php/profile">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>index.php/logOut">Logout</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<br />
	<h3 align="center">User log in</h3>
	<br />
	<div class="panel panel-default">
		<div class="panel-heading">Register</div>
		<div class="panel-body">
			<!-- start the form for registration -->
			<form method="post" action="<?php echo base_url();?>index.php/signUp">
				<div class="form-group">
					<label>Update your Email address</label>
					<input type="text" id="email" name="email" class="form-control" value="<?php echo set_value('email');?>" />
					<span class="text-danger"><?php echo form_error('email'); ?></span>
				</div>
				<div class="form-group">
					<label>Change Password</label>
					<input type="password" id="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>"/>
					<span class="text-danger"><?php echo form_error('password'); ?></span>
				</div><br>
				<div class="form-group">
					<label>First Line of address</label>
					<input type="password" id="fLine" name="fLine" class="form-control" value="<?php echo set_value('fLine'); ?>"/>
					<span class="text-danger"><?php echo form_error('fLine'); ?></span>
				</div>
				<div class="form-group">
					<label>City</label>
					<input type="password" id="city" name="city" class="form-control" value="<?php echo set_value('city'); ?>"/>
					<span class="text-danger"><?php echo form_error('city'); ?></span>
				</div>
				<div class="form-group">
					<label>Post/Zip code</label>
					<input type="pCode" id="pCode" name="pCode" class="form-control" value="<?php echo set_value('pCode'); ?>"/>
					<span class="text-danger"><?php echo form_error('pCode'); ?></span>
				</div>
				<div class="form-group">
					<input type="submit" name="register" value="register" class="btn btn-info" />
				</div>
		</div>
	</div>
</html>
