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

}
