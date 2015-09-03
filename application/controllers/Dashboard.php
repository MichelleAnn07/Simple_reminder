<?php
class Dashboard extends CI_Controller{	
	public function __construct(){
		parent::__construct();
		//$this->load->model('Reminder_model');
	}
	
	public function index(){
		$this->load->helper('url');
		$this->load->view('dashboard_proto1');
	}
}
?>