<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Chat extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Load in the model.
        $this->load->helper('url');
        // $this->load->model('Users_registration');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function loadChat()
    {
      $this->load->view('chat');
    }



}
