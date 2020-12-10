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

	public function get_random($limit)
	{
		$this->db->order_by("id_question","random");
		$this->db->limit($limit);
		return $this->db->get("tblquestion")->result_array();
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

	public function get_last_id($table,$key)
	{
		$this->db->order_by($key,"desc");
		return $this->db->get($table)->result_array()[0][$key];
	}

	public function upload()
	{
		$name = $_FILES["image"]['name'];
		$tmp = $_FILES["image"]['tmp_name'];
		$explodename = explode(".", $name);
		$extension = strtolower(end($explodename));
		$allow_extension = ["jpg","png","bmp","jpeg"];

		if ( in_array($extension, $allow_extension) ) {
			$newName = date("YmdHis") . "." . $extension;

			$dir = "./assets/image/question/";
			move_uploaded_file($tmp, $dir . $newName);

			return $newName;
		} else {
			return 0;
		}
	}

	public function add($data)
	{
		$question = [
			"question" => $data['question'],
			"image" => $data['image'],
			"correct" => 0
		];
		$this->db->insert("tblquestion",$question);

		$id_question = $this->get_last_id("tblquestion","id_question");

		$this->db->insert("tbloptions",["id_question" => $id_question, "option" => $data['option_a']]);
		if ( $data['correct'] == "a" ) {
			$id_option = $this->get_last_id("tbloptions","id_option");
			$this->db->where("id_question",$id_question);
			$this->db->set("correct",$id_option);
			$this->db->update("tblquestion");
		}

		$this->db->insert("tbloptions",["id_question" => $id_question, "option" => $data['option_b']]);
		if ( $data['correct'] == "b" ) {
			$id_option = $this->get_last_id("tbloptions","id_option");
			$this->db->where("id_question",$id_question);
			$this->db->set("correct",$id_option);
			$this->db->update("tblquestion");
		}

		$this->db->insert("tbloptions",["id_question" => $id_question, "option" => $data['option_c']]);
		if ( $data['correct'] == "c" ) {
			$id_option = $this->get_last_id("tbloptions","id_option");
			$this->db->where("id_question",$id_question);
			$this->db->set("correct",$id_option);
			$this->db->update("tblquestion");
		}

		$this->sess->set_flash("Success","Question added","success");
		return true;
	}

	public function edit($data)
	{
		$option = $this->get_options(["id_question" => $data['id_question']]);
		$tblquestion = [
			"question" => $data['question'],
			"image" => $data['image'],
		];
		if ( $data['correct'] == "a" ) {
			$tblquestion['correct'] = $option[0]['id_option'];
		} elseif ( $data['correct'] == "b" ) {
			$tblquestion['correct'] = $option[1]['id_option'];
		} elseif ( $data['correct'] == "c" ) {
			$tblquestion['correct'] = $option[2]['id_option'];
		}
		$this->db->where("id_question",$data['id_question']);
		$this->db->update("tblquestion",$tblquestion);
	

		// option A
		$this->db->where("id_option",$option[0]['id_option']);
		$this->db->set("option",$data['option_a']);
		$this->db->update("tbloptions");
		// option B
		$this->db->where("id_option",$option[1]['id_option']);
		$this->db->set("option",$data['option_b']);
		$this->db->update("tbloptions");
		// option C
		$this->db->where("id_option",$option[2]['id_option']);
		$this->db->set("option",$data['option_c']);
		$this->db->update("tbloptions");
	}
}