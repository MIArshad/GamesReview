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
		//check if the user has logged in, and if not redirect to the login page, if they are, send them to the home page
		if(isset($_SESSION[userlogged]))
		{
			$this->load->view('home');
		}
		else
		{
			$this->load->view('login');
		}
	}

	public function loadRegister()
	{
		$this->load->view('register');
	}


	public function signUp()
	{
//		store the posted data in an array to pass to the insert function in the model.
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

	public function updateUser()
	{
		$username = $_SESSION['username'];

		$data['firstname'] = $this->input->post('firstname');
		$data['surname'] = $this->input->post('surname');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['firstLine'] = $this->input->post('firstLine');
		$data['city'] = $this->input->post('city');
		$data['postcode'] = $this->input->post('postcode');

		$this->Users_registration->updateUser($data, $username);

		redirect(base_url() . 'index.php/profile');
	}

	public function signIn()
	{
//		use form validation to ensure that the entered data is validated
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
//			if the form validation isn't successful
			$this->load->view('login');
		}
		else
		{
//			if it is, store the data in variables, and pass them into the getUser function from the model which will check to see if the details match a user in the db
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$foundUser = $this->Users_registration->getUser($username, $password);

			if($foundUser == FALSE)
			{
//				if there isn't a match in the
				echo "Login details incorrect, please try that again";
			}
			else
			{
//				if a match is found, store the variables, and pass them into an array, set the boolean userlogged as true to be used in other functions
				$username = $foundUser[0]->username;
				$email = $foundUser[0]->email;
				session_start();
//				$sessionArray = array(
//					'username' => $username,
//					'email' => $email,
//				)
				$_SESSION['userlogged'] = true;
				$_SESSION['username'] = $username;

//				$this->session->set_userdata('loggedIn', $sessionArray);

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
//		remove the data stored in the session as the user wants to log out
		$logoutArray = array(
			'username' => ''
		);
		$this->session->unset_userdata('signedIn', $logoutArray);
		redirect(base_url() . 'index.php/signIn');
	}

	public function loadHomepage()
	{
//		var_dump($this->session->all_userdata);
//		take all the reviews in the db, and pass them to the view 
		$review = $this->Review_Model->returnAllReviews();
		$this->load->view('home', ['review'=>$review]);
	}

	public function loadProfile()
	{
		$this->load->view('Profile');
	}

}
