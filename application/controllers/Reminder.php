<?php
class Reminder extends CI_Controller{	
	public function __construct(){
		parent::__construct();
		$this->load->model('Reminder_model');
	}
	
	public function index(){
		$this->load->helper('url');
		$data['title'] = 'Log in';
		$data['username_log_err'] = $data['password_log_err'] = $data['username_log'] = $data['password_log'] = $data['log_in_err'] = '';
		$this->load->view('landing', $data);
	}
	
	public function log_in(){
		$this->load->helper('url');
		$this->load->library('session');
		$username_log = $this->input->post('username_log');
		$password_log = $this->input->post('password_log');
		$data['title'] = 'Log in';
		$data['username_log_err'] = $this->validate_input($username_log, 'any_field');
		$data['password_log_err'] = $this->validate_input($password_log, 'any_field');
		$data['username_log'] = $this->filter_input($username_log);
		$data['password_log'] = $this->filter_input($password_log);
		$data['log_in_err'] = '';
		if((empty($data['username_log_err'])) && (empty($data['password_log_err']))){
			if(is_null($this->Reminder_model->check_login($data['username_log'], $data['password_log']))){
				$data['log_in_err'] = 'Username or Password is incorrect.';
				$this->load->view('landing',$data);
			}
			else
				// Go to dashboard
				// Login successfully
				$this->session->set_userdata('username', $data['username_log']);
				$this->load->view('dashboard_proto1');
		}
		else
			$this->load->view('landing',$data);
	}
	
	public function sign_up(){
		$this->load->helper('url');
		$this->load->library('session');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$repassword = $this->input->post('repassword');
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$data['title'] = 'Sign up';
		$data['username_err'] = $this->validate_input($username, 'any_field');
		$data['password_err'] = $this->validate_input($password, 'any_field');
		$data['repassword_err'] = $this->confirm_password($password, $repassword);
		$data['firstname_err'] = $this->validate_input($firstname,'name');
		$data['lastname_err'] = $this->validate_input($lastname, 'name');
		$data['email_err'] = $this->validate_input($email, 'email');
		$data['username'] = $this->filter_input($username);
		$data['password'] = $this->filter_input($password);
		$data['repassword'] = $this->filter_input($repassword);
		$data['firstname'] = $this->filter_input($firstname);
		$data['lastname'] = $this->filter_input($lastname);
		$data['email'] = $this->filter_input($email);
		if(empty($data['username_err']) && empty($data['password_err']) && empty($data['repassword_err']) && empty($data['firstname_err']) && empty($data['lastname_err']) && $data['email_err']){
			// Insert data into database
			$this->Reminder_model->insert_user($data['username'], $data['password'], $data['firstname'], $data['lastname'], $data['email']);

			// Go to dashboard
			// Login successfully / Welcome new user modal
			$this->session->set_userdata('username', $data['username']);
			$this->load->view('dashboard_proto1');
		}

		else{
			$this->load->view('landing', $data);
		}
	}
	
	public function validate_input($string, $type){
		switch($type){
			case 'username':
				if(empty($string))
					return 'Field is required.';
				if($this->Reminder_model->get_username($string) == null)
					return 'Username exists.';
				break;
			case 'name': 
				if(empty($string))
					return 'Field is required.';
				if(!preg_match("/^[a-z ,.'-]+$/i", $string))
					return 'Name is invalid.';
				break;
			case 'email':
				if(empty($string))
					return 'Field is required.';
				if(!filter_var($string, FILTER_VALIDATE_EMAIL))
					return 'Email is invalid.';
				if($this->Reminder_model->get_email($string) == null)
					return 'Email exists.';
				break;
			case 'any_field':
				if(empty($string))
					return 'Field is required.';
				break;
		}
	}
	
	public function confirm_password($password, $repassword){
		if(strcmp($password, $repassword) !== 0)
			return 'Password does not match.';
	}
	
	public function filter_input($string){
		$string = trim($string);
		$string = htmlspecialchars($string);
		return $string;
	}





	// Dashboard Functions

}
?>