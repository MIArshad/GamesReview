
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pomegranate Games</title>
  <script defer src="http://localhost:8000/socket.io/socket.io.js"></script>
  <script defer src="http://localhost:8081/gamesReview/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.15.0/d3.min.js"></script> 
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/bootstrap_template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/bootstrap_template/css/gamesreview.css" rel="stylesheet">
</head>
<body>
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
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
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
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <!-- <script src="bootstrap_template/vendor/jquery/jquery.min.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/bootstrap_template/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bootstrap_template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
