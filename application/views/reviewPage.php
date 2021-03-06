<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
<!--	loop through the data passed through the controller i.e. all of the data retrieved from the db -->
	<?php foreach($review as $review){?>

<<<<<<< HEAD
  <?php foreach($review as $review){?>
=======
	<title><?php echo $review->review_name; ?></title>
<!--	load in bootstrap-->
	<link href="<?php echo base_url(); ?>assets/bootstrap_template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
>>>>>>> 5c7e735768ee9f373c94cb67fe4990240de1ed76

	<link href="<?php echo base_url(); ?>application/css/gamesReview.css" rel="stylesheet">

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
            <a class="nav-link" href="#">Home
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
  <div class="container">

    <div class="row">
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/<?php echo $review->imageLarge ?>" alt="">
          <div class="card-body">
            <h3 class="card-title"><?php echo $review->review_name?></h3>
            <h5>Written by <?php echo $review->author?></h5>
            <p class="card-text"><?php echo $review->review_data ?></p>
          </div>
        </div>
        <!-- /.card -->
        <form method="post" @submit.prevent="postComment()" action="<?php echo base_url();?>index.php/postComment">
          <input type="text" name="comment" v-model="commentData">
          <input type="submit" name="submit" class="btn btn-success" value="Leave a review"></button>
        </form>

      <?php } ?>


        <div id="app">
          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Product Reviews
            </div>
            <div class="card-body">
              <div v-for="comment in comments">
              {{comment.commentData}}<br><br>
            </div>
          </div>
        </div>


        <!-- /.card -->

        </div>


      </div>
      <!-- /.col-lg-9 -->



    </div>

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
  <script src="<?php echo base_url(); ?>assets/bootstrap_template/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bootstrap_template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>application/CustomVue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
=======
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
					<a class="nav-link" href="#">Home
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
<div class="container">

	<div class="row">
		<!-- /.col-lg-3 -->

		<div class="col-lg-9">
<!--		show the image associated with the review, the title/name, author, or in this case where it was taken from, and the data-->
			<div class="card mt-4">
				<img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/<?php echo $review->imageLarge ?>" alt="">
				<div class="card-body">
					<h3 class="card-title"><?php echo $review->review_name?></h3>
					<h5>Taken from: <?php echo $review->author?></h5>
					<p class="card-text"><?php echo $review->review_data ?></p>
				</div>
			</div>
			<!-- /.card -->
<!--			attempt at using vue.js to send comments to db, no luck so a reroute to controller which will directly add the comment to the db-->
			<form method="post" @submit.prevent="postComment()" action="<?php echo base_url();?>index.php/postComment">
				<input type="text" name="comment" v-model="commentData">
				<input type="submit" name="submit" class="btn btn-success" value="Leave a review"></button>
			</form>

			<?php } ?>

<!--		display the data from vue.js that is stored in the "comments" data key-->
			<div id="app">
				<div class="card card-outline-secondary my-4">
					<div class="card-header">
						Product Reviews
					</div>
					<div class="card-body">
						<div v-for="comment in comments">
							{{comment.commentData}}<br><br>
						</div>
					</div>
				</div>


				<!-- /.card -->

			</div>


		</div>
		<!-- /.col-lg-9 -->



	</div>

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
	</div>
	<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript, and vue.js for comments  -->
<script src="<?php echo base_url(); ?>assets/bootstrap_template/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap_template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>application/CustomVue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
>>>>>>> 5c7e735768ee9f373c94cb67fe4990240de1ed76


</body>

</html>
