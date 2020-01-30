<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Load in the model.
        $this->load->helper('url');
        $this->load->model('Users_registration');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('register');
    }

    public function signUp()
    {
      $data['username'] = $this->input->post('username');
      $data['email'] = $this->input->post('email');
      $data['password'] = $this->input->post('password');

      $this->Users_registration->insert($data);

      $this->load->view('login');
    }

    public function signIn()
    {
      $this->form_validation->set_rules('username', 'username', 'trim|required');
      $this->form_validation->set_rules('password', 'password', 'trim|required');

      if($this->form_validation->run()==FALSE)
      {
        if(isset($this->session->userInfo['loggedIn']))
        {
          $this->load->view('homepage');
        }
        else {
          $this->load->view('login');
        }
      }
      else
      {
        $data = array(
          'username' => $this->input->post('username'),
          'password' => $this->input->post('password')
        );

        $loginResult = $this->Users_registration->login($data);

        if($loginResult == true)
        {
          $username = $this->input->post('username');
          $getUserResult = $this->Users_registration->getUser($username);
          if($getUserResult == TRUE)
          {
            $sessionInfo = array(
              'username' => $result[0]->username,
              'email' => $result[0]->email,
            );
            $this->session->set_userdata('signedIn', $sessionInfo);
          }
        }


      }
    }
}
