<?php
class User_mgmt extends CI_Model
{
	public function validateLogin($username,$password){

		$sql=$this->db->where(['username'=>$username,'password'=>$password])->get('user');
		if($sql->num_rows()){
			return $sql->row()->user_id;
		}
	}
}
?>