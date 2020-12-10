<?php 

class User extends CI_Model {
	public function get($condition = null)
	{
		if ( $condition == null ) {
			$get = $this->db->get("tblboard");
		} else {
			$get = $this->db->get_where("tblboard",$condition);
		}

		return $get->result_array();
	}

	public function get_data($condition)
	{
		$get = $this->db->get_where("tblboard",$condition)->result_array();
		if ( count($get) > 0 ) {
			return $get[0];
		} else {
			return 0;
		}
	}
}