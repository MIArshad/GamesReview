<html>
<head>
	<title>Profile</title>
	<!-- load in bootstrap -->
	<link href="<?php echo base_url(); ?>assets/bootstrap_template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script defer src="http://localhost:3000/socket.io/socket.io.js"></script>
	<script defer src="script.js"></script>
	<link href="<?php echo base_url(); ?>application/css/gamesReview.css" rel="stylesheet">

<body>
<!-- Navbar with links to home, chat, profile and logout -->

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
	<h3 align="center">Personal Profile</h3>
	<br />
	<div class="panel panel-default">
		<div class="panel-heading">Edit Profile Details</div>
		<div class="panel-body">
			<!-- start the form for amending the profile -->
			<form method="post" action="<?php echo base_url();?>index.php/update">
				<div class="form-group">
					<label>Enter your firstname</label>
					<input type="text" id="firstname" name="firstname" class="form-control" value="<?php echo set_value ('firstname');?>" />
					<span class="text-danger"><?php echo form_error('firstname');?></span>
				</div>
				<div class="form-group">
					<label>Enter your surname</label>
					<input type="text" id="surname" name="surname" class="form-control" value="<?php echo set_value ('surname');?>" />
					<span class="text-danger"><?php echo form_error('surname');?></span>
				</div>
				<div class="form-group">
					<label>Enter your Email address</label>
					<input type="text" id="email" name="email" class="form-control" value="<?php echo set_value('email');?>" />
					<span class="text-danger"><?php echo form_error('email'); ?></span>
				</div>
				<div class="form-group">
					<label>Enter Password</label>
					<input type="password" id="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>"/>
					<span class="text-danger"><?php echo form_error('password'); ?></span>
				</div><br>
				<div class="form-group">
					<label>First Line of address</label>
					<input type="text" id="firstLine" name="firstLine" class="form-control" value="<?php echo set_value('firstLine'); ?>"/>
					<span class="text-danger"><?php echo form_error('firstLine'); ?></span>
				</div>
				<div class="form-group">
					<label>City</label>
					<input type="text" id="city" name="city" class="form-control" value="<?php echo set_value('city'); ?>"/>
					<span class="text-danger"><?php echo form_error('city'); ?></span>
				</div>
				<div class="form-group">
					<label>Post/Zip code</label>
					<input type="text" id="postcode" name="postcode" class="form-control" value="<?php echo set_value('postcode'); ?>"/>
					<span class="text-danger"><?php echo form_error('postcode'); ?></span>
				</div>
				<div class="form-group">
					<input type="submit" name="register" value="update" class="btn btn-info" />
				</div>
		</div>
	</div>
</html>
