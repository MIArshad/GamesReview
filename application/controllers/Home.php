<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Load in the model.
        $this->load->helper('url');
        $this->load->model('Users_registration');
        $this->load->model('Review_Model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
    	//check if user is logged in, redirect to homepage of site
//        $this->load->view('register');
    }

    public function loadRegister()
	{
		$this->load->view('register');
	}


    public function signUp()
    {
      $data['username'] = $this->input->post('username');
      $data['firstname'] = $this->input->post('firstname');
      $data['surname'] = $this->input->post('surname');
      $data['email'] = $this->input->post('email');
      $data['password'] = $this->input->post('password');
      $data['firstLine'] = $this->input->post('firstLine');
      $data['city'] = $this->input->post('city');
      $data['postcode'] = $this->input->post('postcode');

      $this->Users_registration->insert($data);

      $this->load->view('login');
    }

    public function signIn()
    {
      $this->form_validation->set_rules('username', 'username', 'trim|required');
      $this->form_validation->set_rules('password', 'password', 'trim|required');

      if($this->form_validation->run() == FALSE)
      {
        $this->load->view('login');
      }
      else
      {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $foundUser = $this->Users_registration->getUser($username, $password);

        if($foundUser == FALSE)
        {
          echo "Login details incorrect, please try that again";
        }
        else
        {
          $username = $foundUser[0]->username;
          $email = $foundUser[0]->email;
          session_start();
          $sessionArray = array(
            'username' => $username,
            'email' => $email,
          );

          $_SESSION['userlogged'] = true;

          $this->session->set_userdata('loggedIn', $sessionArray);

          if(isset($_SESSION['loggedIn']))
          {
            redirect(base_url() . 'index.php/home');
          }
          else
          {
            echo 'basically ye, it didn\'t work and you need to try again';
          }
        }
      }
    }

    public function signout()
    {
      $logoutArray = array(
        'username' => ''
      );
      $this->session->unset_userdata('signedIn', $logoutArray);
      redirect(base_url() . 'index.php/signIn');
    }

    public function loadHomepage()
    {
      $review = $this->Review_Model->returnAllReviews();
      $this->load->view('home', ['review'=>$review]);
    }

    public function loadProfile()
	{
		$this->load->view('Profile');
	}

}
