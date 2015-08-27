<?php
class Email_sender extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Email_sender_model');	
	}
	
	public function index(){
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
				echo 'MAIL SENT!';
				$this->Email_sender_model->set_reminder_status($row->reminder_id);
			}
			else{
				echo 'Mail Not Sent! <br/>';
				show_error($this->email->print_debugger());	
			}
		}
		
		// $this->email->from('ffxgamer07@gmail.com', 'Simple Reminder');
        // $this->email->to('raymarmonte@gmail.com');
		// $this->email->subject('Email testing');
		// $this->email->message('success');
		// if($this->email->send())
			// echo 'MAIL SENT!';
		// else{
			// echo 'Mail Not Sent! <br/>';
			// show_error($this->email->print_debugger());	
		// }
	}
	
	private function email_config(){
		return array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_timeout' => '7',
			'smtp_user' => 'ffxgamer07@gmail.com',
			'smtp_pass' => 'Tacomaniac47',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE,
			'newline' => "\r\n",
			'validation' => TRUE,
		);
	}
}
?>