<?php 

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Sess","sess");
		$this->load->model("Question","question");
		if ( !isset($_SESSION["admin"]) ) {
			redirect(base_url());
		}
	}

	public function index()
	{
		if ( isset($_POST['submit_x']) ) {
			$upload = $this->question->upload();
			if ( $upload ) {
				$data = [
					"question" => $this->input->post("question",true),
					"image" => $upload,
					"option_a" => $this->input->post("option_a",true),
					"option_b" => $this->input->post("option_b",true),
					"option_c" => $this->input->post("option_c",true),
					"correct" => $this->input->post("correct",true),
				];
				$this->question->add($data);
				redirect(base_url("admin"));
			} else {
				$this->sess->set_flash("Error","The file must have a .jpg, .jpeg, .bmp, or .png extension","error");
				redirect(base_url("admin"));
			}
		} else {
			$data['pagetitle'] = "Admin";
			$data['questions'] = $this->question->get();
			$this->load->view("zzz/head",$data);
			$this->load->view("admin/admin");
			$this->load->view("zzz/foot");
		}
	}

	public function edit($id_question = null)
	{
		if ( $id_question == null ) {
			redirect(base_url("admin"));
		} else {
			$data['pagetitle'] = "Admin";
			$data['question'] = $this->question->get_data(["id_question" => $id_question]);
			$data['option'] = $this->question->get_options(["id_question" => $id_question]);
			$this->load->view("zzz/head",$data);
			$this->load->view("admin/edit");
			$this->load->view("zzz/foot");
		}
	}

	public function logout()
	{
		unset($_SESSION["admin"]);
		redirect(base_url());
	}
}