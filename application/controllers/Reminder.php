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
}
?>