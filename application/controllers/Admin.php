<?php 

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Question","question");
		if ( !isset($_SESSION["admin"]) ) {
			redirect(base_url());
		}
	}

	public function index()
	{
		if ( isset($_POST['adminlogin_x']) ) {
			
		} else {
			$data['pagetitle'] = "Admin";
			$data['questions'] = $this->question->get();
			$this->load->view("zzz/head",$data);
			$this->load->view("admin/admin");
			$this->load->view("zzz/foot");
		}
	}
}