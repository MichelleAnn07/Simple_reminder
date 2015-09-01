<?php
class Reminder_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	//Checks if Username and Password exist in Database
	public function check_login($username = 'MichelleAnn07', $password = '12345'){
		$where = array('username' => 'MichelleAnn07', 'password' => '12345');
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($where);
		$query = $this->db->get();
		// echo $query->num_rows();
		if($query->num_rows() > 0){
			var_dump($query->result_array());
		}
	}
	//Gets the username
	public function get_username($username = null){
		$where = array('username' => $username);
		$this->db->select('username');
		$this->db->from('user');
		$this->db->where($where);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array;
		}
	}
	//Gets Lastname and Firstname of user
	public function get_name($username = null){
		$where = array('username' => $username);
		$this->db->select('fname,lname');
		$this->db->from('user');
		$this->db->where($where);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}
	}
	//Gets the Reminder
	public function get_reminder($username = null){
		$where = array('username' => $username);
		$this->db->select('reminder_title, reminder_note, reminder_timestamp, reminder_status');
		$this->db->from('reminder');
		$this->db->where($where);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}
	}
	//Insert New User
	public function insert_user($username, $password, $fname, $lname, $email){
		$user = array(
			'username' => $username,
			'password' => $password,
			'fname' => $fname,
			'lname' => $lname,
			'email' => $email
		);
		$this->db->insert('user',$user);
	}
	//Insert New Reminder
	public function insert_reminder($username, $reminder_title, $reminder_note, $reminder_timestamp, $reminder_status){
		$reminder = array(
			'username' => $username,
			'reminder_title' => $reminder_title,
			'reminder_note' => $reminder_note,
			'reminder_timestamp' => $reminder_timestamp,
			'reminder_status' => $reminder_status
		);
		$this->db->insert('reminder',$reminder);
	}
}
?>