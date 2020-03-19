<?php
if(isset($message_display))
{
	echo $message_display;
}
else if(isset($error_display))
{
	echo $error_display;
}
else
{
	?>
	<html>
	<head>
		<title>User registration and login</title>
		<!-- load in bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<body>
	<div class="container">
		<br />
		<h3 align="center">User log in</h3>
		<br />
		<div class="panel panel-default">
			<div class="panel-heading">Please log in</div>
			<div class="panel-body">
				<!-- start the form for registration -->
				<form method="post" action="<?php echo base_url();?>index.php/signIn">
					<div class="form-group">
						<label>Enter your name</label>
						<input type="text" id="username" name="username" class="form-control" value="<?php echo set_value ('username');?>" />
						<span class="text-danger"><?php echo form_error('username');?></span>
					</div>
					<div class="form-group">
						<label>Enter Password</label>
						<input type="password" id="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>"/>
						<span class="text-danger"><?php echo form_error('password'); ?></span>
					</div>
					<div class="form-group">
						<input type="submit" name="register" value="login" class="btn btn-info" />
					</div>
					<a href="<?php echo base_url(); ?>index.php/register">Dont have an account yet? Click here to register</a>
			</div>
		</div>
	</html>
<?php } ?>
