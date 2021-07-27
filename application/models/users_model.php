<?php 

class Users_model extends CI_Model {
  function __construct() {
    parent::__construct();
     $this->load->database();
  }

  public function check_user($user,$pass,$type) {
		$this->db->select('*');
		$this->db->from($type);
		$this->db->where('email',$user);
		$this->db->where('pswd',md5($pass));
		$query = $this->db->get();
		$result = $query->result();
		return json_encode($result[0]);
   }
}


?>