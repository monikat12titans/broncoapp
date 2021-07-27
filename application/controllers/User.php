<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	
	function __construct() {
        parent::__construct();
       
		$this->load->model('users_model');
    }
	
	public function index()
	{	$user = $this->input->get('user');
		$pass = $this->input->get('pass');
		$type = $this->input->get('type');
		if($type == 1){
			$type = "admin";
		}elseif($type == 2){
			$type = "users";
		}elseif($type == 3){
			$type = "drivers";
		}else{
			$type = "admin";
		}
		
		$result = $this->users_model->check_user($user,$pass,$type);
		
		echo $result;
		
		
	}
}
