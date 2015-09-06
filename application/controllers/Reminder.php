<?php
class Reminder extends CI_Controller{	
	public function __construct(){
		parent::__construct();
		$this->load->model('Reminder_model');
		$this->load->model('Email_sender_model');	
	}
	
	public function index(){
		$this->load->helper('url');
		if($this->session->userdata('username') != null)
			$this->load->view('dashboard_proto1');
		$data['title'] = 'Log in';
		$data['username_log_err'] = $data['password_log_err'] = $data['username_log'] = $data['password_log'] = $data['log_in_err'] = '';
		$data['reminder_title_err'] = $data['reminder_content_err'] = $data['reminder_date_err'] = $data['reminder_time_err'] = '';
		$this->load->view('landing', $data);
	}
	
	// Functions for sending of Email
	private function email_config(){
		return array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_timeout' => '7',
			'smtp_user' => 'nmssimplereminder@gmail.com',
			'smtp_pass' => 'noticemesenpai',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE,
			'newline' => "\r\n",
			'validation' => TRUE,
		);
	}
	
	public function email_sender(){
		$config = $this->email_config();
		$this->load->library('email', $config);

		$curr_date = date('Y-m-d H:i:s');
		$result = $this->Email_sender_model->get_reminder($curr_date);
		foreach($result as $row){
			$this->email->from('ffxgamer07@gmail.com', 'Simple Reminder');
			$this->email->to($row->email);
			$this->email->subject('Simple Reminder: '.$row->reminder_title);
			$this->email->message($row->reminder_note);
			if($this->email->send()){
				$this->Email_sender_model->set_reminder_status($row->reminder_id, 'SENT');
			}
			else{
				$this->Email_sender_model->set_reminder_status($row->reminder_id);
			}
		}
	}
	
	
	public function log_out(){
		
		
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
			else{
				$this->session->set_userdata('username', $data['username_log']);
				$this->load->view('dashboard_proto1');
			}
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
			$this->Reminder_model->insert_user($data['username'], $data['password'], $data['firstname'], $data['lastname'], $data['email']);
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
				else if($this->Reminder_model->get_username($string) == null)
					return 'Username exists.';
				break;
			case 'name': 
				if(empty($string))
					return 'Field is required.';
				else if(!preg_match("/^[a-z ,.'-]+$/i", $string))
					return 'Name is invalid.';
				break;
			case 'email':
				if(empty($string))
					return 'Field is required.';
				else if(!filter_var($string, FILTER_VALIDATE_EMAIL))
					return 'Email is invalid.';
				else if($this->Reminder_model->get_email($string) == null)
					return 'Email exists.';
				break;

			case 'date':
				$date = date('Y-m-d', strtotime($string));
				
				if(empty($string))
					return 'Date is required.';
				
				else if(date('Y-m-d') > $date) {
					return 'Date is invalid';
				}

				break;

			case 'time':
				$date = date('Y-m-d', strtotime($string));
				$time = date('H:i', strtotime($string));

				if(empty($string))
					return 'Time is required.';

				else if(date('Y-m-d') < $date && date('H:i') < $time) {
					return 'Time is invalid';
				}

				break;

			case 'any_field':
				if(empty($string))
					return 'Field is required.';
				break;
		}
	}
	
	public function confirm_password($password, $repassword){
		if(empty($repassword))
			return 'Field is required.';
		else if(strcmp($password, $repassword) !== 0)
			return 'Password does not match.';
	}
	
	public function filter_input($string){
		$string = trim($string);
		$string = htmlspecialchars($string);
		return $string;
	}





	// Dashboard Functions
	public function save_reminder() {
		$this->load->helper('url');
		$this->load->library('session');

		if($this->session->userdata('username') == null)
			$this->load->view('landing');

		$username = $this->session->userdata('username');
		$reminder_title = $this->input->post('reminder_title');
		$reminder_content = $this->input->post('reminder_content');
		$reminder_date = $this->input->post('reminder_date');
		$reminder_time = $this->input->post('reminder_time');

		$data['title'] = 'Send Reminder';
		$data['reminder_title_err'] = $this->validate_input($reminder_title, 'any_field');
		$data['reminder_content_err'] = $this->validate_input($reminder_content, 'any_field');
		$data['reminder_date_err'] = $this->validate_input($reminder_date, 'date');
		$data['reminder_time_err'] = $this->validate_input($reminder_time, 'time');
		
		// echo $data['reminder_title_err'] . '<br/>';
		// echo $data['reminder_content_err'] . '<br/>';
		// echo $data['reminder_date_err'] . '<br/>';
		// echo $data['reminder_time_err'] . '<br/>';
		//echo date("H:i", strtotime($reminder_time));

		if(empty($data['reminder_title_err']) && empty($data['reminder_content_err']) && empty($data['reminder_date_err']) && empty($data['reminder_time_err'])) {
			$reminder_timestamp = $this->merge_datetime($reminder_date, $reminder_time);
			$this->Reminder_model->insert_reminder($username, $reminder_title, $reminder_content, $reminder_timestamp, null);
			$this->email_sender();
			$this->load->view('dashboard_proto1');
		}

		else {
			$this->load->view('dashboard_proto1', $data);
		}
	}

	public function merge_datetime($date, $time) {
		//$datetime = new Date($date . $time);
		$newdate = date("Y-m-d", strtotime($date));
		$newtime = date("H:i:s", strtotime($time));
		$datetime = $newdate . ' ' . $newtime;
		
		// echo $date . '<br/>';
		// echo $newdate . '<br/><br/>';
		// echo $time . '<br/>';
		// echo $newtime . '<br/><br/>';
		// echo $datetime;

		return $datetime;
	}

	public function view_reminders() {
		$this->load->helper('url');
		$username = $this->session->userdata('username');
		$this->Reminder_model->get_reminders($username);
		$this->load->view('landing', $data);
	}
}
?>
