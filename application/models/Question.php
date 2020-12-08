<?php 

class Question extends CI_Model {
	public function get($condition = null)
	{
		if ( $condition == null ) {
			$get = $this->db->get("tblquestion");
		} else {
			$get = $this->db->get_where("tblquestion",$condition);
		}

		return $get->result_array();
	}

	public function get_data($condition)
	{
		return $this->db->get_where("tblquestion",$condition)->result_array()[0];
	}

	public function get_options($condition)
	{
		if ( $condition == null ) {
			$get = $this->db->get("tbloptions");
		} else {
			$get = $this->db->get_where("tbloptions",$condition);
		}

		return $get->result_array();
	}

	public function get_options_data($condition)
	{
		return $this->db->get_where("tbloptions",$condition)->result_array()[0];
	}
}