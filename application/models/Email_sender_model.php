<?php 
class Email_sender_model extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function get_reminder($timestamp = null){
		$where = array('reminder.reminder_timestamp <=' => $timestamp, 'reminder.reminder_status' => NULL);
		$this->db->select('user.username, user.email, ,reminder.reminder_id, reminder.reminder_title, reminder.reminder_note');
		$this->db->from('reminder');
		$this->db->join('user', 'user.username = reminder.username');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function set_reminder_status($reminder_id = null, $reminder_status = null){
		$update = array('reminder_status' => $reminder_status);
		$where = array('reminder_id' => $reminder_id);
		$this->db->where($where);
		$this->db->update('reminder',$update);
	}
}
?>