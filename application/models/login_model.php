<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function add_user($table,$data){

		$this->db->insert($table,$data);

		return ($this->db->affected_rows()>0)? true : false;
	}

	public function isValidate($table,$data){

		$query = $this->db->where(['username'=>$data['username'],'password'=>$data['password']])->get($table);
		if ($query->result()) {
			return true;
		}
		else
		{
			return false;
		}
	}	

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */

?>