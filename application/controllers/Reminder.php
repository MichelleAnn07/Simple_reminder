<?php
class Reminder extends CI_Controller{
	
	public function __constuct(){
		parent::__constuct();
		$this->load->model('Reminder_model');
	}
	
	public function index(){
		$this->load->helper('url');
		$this->load->view('landing');
	}
	
	public function sign_in(){
		$username = 
		$password = 
		$repassword = 
		$firstname =
		$lastname = 
		$email =
		$data['title'] = 'Sign in';
		$data['username_err'] = validate_input($username, 'any_field');
		$data['password_err'] = validate_input($password, 'any_field');
		$data['repassword_err'] = confirm_password($password, $repassword);
		$data['firstname_err'] = validate_input($firstname,'name');
		$data['lastname_err'] = validate_input($lastname, 'name');
		$data['email_err'] = validate_input($email, 'email');
	}
	
	public function validate_input($string, $type){
		switch($type){
			case 'name': 
				if(empty($string))
					return 'Field is required.';
				if(!preg_match("/^[a-z ,.'-]+$/i", $string))
					return 'Name is invalid.';
				break;
			case 'email':
				if(empty($string))
					return 'Field is required.';
				if(!filter_var($email, FILTER_VALIDATE_EMAIL))
					return 'Email is invalid.';
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
		$string = trim($data);
		$string = htmlspecialchars($data);
		return $data;
	}
}
?>