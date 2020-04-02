
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Pomegranate Games</title>
<!--link in socket.io, javascript for node.js, and bootstrap/css for the styling of the page	-->
	<script defer src="http://localhost:3000/socket.io/socket.io.js"></script>
	<script defer src="http://localhost:8081/GamesReview/script.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.15.0/d3.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/bootstrap_template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/bootstrap_template/css/gamesReview.css" rel="stylesheet">
</head>
<body>
<<<<<<< HEAD
  <!-- Navigation -->
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
            <a class="nav-link" href="<?php echo base_url();?>index.php/logOut">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->

  <div id="chatForm">

    <form id="sendMessage">
      <input type="text" id="message">
      <button type="submit" id="send">Send</button>
    </form>


  </div>
  <div id="chatspace">

  </div>
  <style>

	  #chatForm
	  {
		  width: 80%;
		  max-width: 1200px;
	  }
	  #chatForm div{
		  font-weight: bold;
		  background-color: #ccc;
		  padding: 5px;
	  }

	  #chatForm div:nth-child(2n)
	  {
		  background-color: #fff;
	  }

	  #sendMessage
	  {
		  position: fixed;
		  padding-bottom: 30px;
		  bottom:0;
		  background-color: white;
		  max-width: 1200px;
		  width: 80%;
		  display: flex;
	  }

  </style>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark" id="footer">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <!-- <script src="bootstrap_template/vendor/jquery/jquery.min.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/bootstrap_template/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bootstrap_template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
=======
<!-- Navbar at the top of the page -->
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
					<a class="nav-link" href="<?php echo base_url();?>index.php/logOut">Logout</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Form for sending a message -->

<div id="chatForm">
	<form id="sendMessage">
		<input type="text" id="message">
		<button type="submit" id="send">Send</button>
	</form>
	<!--space for sent messages to show-->
</div>
<div id="chatspace">

</div>
<style>

	#chatForm
	{
		width: 80%;
		max-width: 1200px;
	}

	#chatForm div{
		<?php if($_SESSION['username'] == 'admin'){?>
		font-weight: bold;
		<?php } ?>
		background-color: #ccc;
		padding: 5px;
	}

	#chatForm div:nth-child(2n)
	{
		background-color: #fff
	}

	#sendMessage
	{
		position: fixed;
		padding-bottom: 30px;
		bottom:0;
		background-color: white;
		max-width: 1200px;
		width: 80%;
		display: flex;
	}

</style>


<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
	</div>
	<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url(); ?>assets/bootstrap_template/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap_template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
>>>>>>> 5c7e735768ee9f373c94cb67fe4990240de1ed76
</body>

</html>
