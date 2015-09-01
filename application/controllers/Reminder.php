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
		$data('title') = 'Sign in';
		
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
		}
	}
	
	public function filter_input($string){
		$string = trim($data);
		$string = htmlspecialchars($data);
		return $data;
	}
}
?>