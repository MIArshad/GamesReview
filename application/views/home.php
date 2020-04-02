
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pomegranate Games</title>
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/bootstrap_template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script defer src="http://localhost:3000/socket.io/socket.io.js"></script>
  <script defer src="script.js"></script>

    <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>application/css/gamesReview.css" rel="stylesheet">
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

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <div class="row">

        <?php foreach($review as $review){ ?>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="<?php echo base_url();?>index.php/reviewPage/<?php echo $review->reviewID;  ?>"><img class="card-img-top" src="<?php echo base_url() ?>/assets/<?php echo $review->imageSmall ?>" alt=""></a>
            </div>
          </div>

        <?php } ?>



          <!-- <button class="open-button" onclick="openForm()">Chat</button>

          <div action"#" class="chat-popup" id="chatForm" method="POST">
            <form class="form-container" id="sendMessage">
              <h1>Chat</h1>

              <label for="msg"><b>Message</b></label>
              <textarea placeholder="Type message.." name="msg" id="input" required></textarea>

              <button type="submit" class="btn">Send</button>
              <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
          </div> -->

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->



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
  <script src="<?php echo base_url(); ?>application/chatPopup.js"></script>
</body>

</html>
