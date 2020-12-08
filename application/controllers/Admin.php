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
				# code...
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
}