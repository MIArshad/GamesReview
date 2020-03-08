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

      $this->load->view('reviewPage', ['review'=>$review]);
    }




}
