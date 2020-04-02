<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Review extends CI_Controller{

<<<<<<< HEAD
    public function __construct()
    {
        parent::__construct();
        //Load in the model.
        $this->load->helper('url');
        $this->load->model('Review_Model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }


    public function loadReview()
    {
      $reviewid = $this->uri->segment(2,0);
      $data = array(
        'reviewid'=>$reviewid
      );
      $this->session->set_userdata($data);
      // print_r($this->session->userdata('reviewid'));

      $review = $this->Review_Model->getReview($reviewid);
      // $comments = $this->Review_Model->getComments($reviewid);
      $this->load->view('reviewPage', ['review'=>$review]);
    }

    public function returnComments()
    {
      header('Content-Type: application/json');
      $reviewid = $this->session->userdata('reviewid');

      $comments = $this->Review_Model->getComments($reviewid);

      $commentsArray = [];

      // $userArray = array('reviewID' => '1', 'commentData' => 'my html sucks');


      foreach($comments as $comments)
      {
        $commentsArray[] = array('reviewID'=>$comments->reviewID, 'commentData'=>$comments->commentData);
      }
      echo json_encode($commentsArray);
    }

    public function insertComment()
    {
      $reviewid = $this->session->userdata('reviewid');

      $commentData = $this->input->post();

      $comment = $commentData['comment'];
      // var_dump($comment);
      $this->Review_Model->insertComment($reviewid, $comment);

      redirect(base_url() . 'index.php/reviewPage/' . $reviewid);
    }
=======
	public function __construct()
	{
//		load in the review model, helpers, and relevant libraries
		parent::__construct();
		//Load in the model.
		$this->load->helper('url');
		$this->load->model('Review_Model');
		$this->load->library('session');
		$this->load->library('form_validation');
	}


	public function loadReview()
	{
//		take the review id from the url, and store in session to be changed when another review has been loaded
		$reviewid = $this->uri->segment(2,0);
		$data = array(
			'reviewid'=>$reviewid
		);
		$this->session->set_userdata($data);
		// print_r($this->session->userdata('reviewid'));
//		use the review id to retrieve the review from the db and pass it to the view in the form of an array
		$review = $this->Review_Model->getReview($reviewid);
		// $comments = $this->Review_Model->getComments($reviewid);

		$this->load->view('reviewPage', ['review'=>$review]);
	}

	public function returnComments()
	{
//		take the reviewid from the db, get the comments from the db by calling a function in the model, and encode it into json to be passed to vue.js
		header('Content-Type: application/json');
		$reviewid = $this->session->userdata('reviewid');

		$comments = $this->Review_Model->getComments($reviewid);

		$commentsArray = [];

		foreach($comments as $comments)
		{
			$commentsArray[] = array('reviewID'=>$comments->reviewID, 'commentData'=>$comments->commentData);
		}
		echo json_encode($commentsArray);
	}

	public function insertComment()
	{
//		take the review id from the db, take the data entered by the user, and use the model function to insert it into the db
		$reviewid = $this->session->userdata('reviewid');

		$commentData = $this->input->post();

		$comment = $commentData['comment'];
		// var_dump($comment);
		$this->Review_Model->insertComment($reviewid, $comment);

		redirect(base_url() . 'index.php/reviewPage/' . $reviewid);
	}
>>>>>>> 5c7e735768ee9f373c94cb67fe4990240de1ed76

}
