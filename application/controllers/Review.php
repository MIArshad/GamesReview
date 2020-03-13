<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Review extends CI_Controller{

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
      $review = $this->Review_Model->getReview($reviewid);
      $comments = $this->Review_Model->getComments($reviewid);

      $this->load->view('reviewPage', ['review'=>$review, 'comments'=>$comments]);
    }

    public function returnComments()
    {
      // $reviewid = $this->uri->segment(2,0);
      $comments = $this->Review_Model->getAllComments();

      $commentsArray = array('ReviewID'=>'1', 'commentData'=>'leave me alone');

      header('Content-Type: application/json');

      echo json_encode($comments);
    }

    public function insertComment()
    {
      //insert code to take comment and put in db
    }

}
