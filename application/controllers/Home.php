<?php 

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Sess","sess");
		$this->load->model("Question","question");
		$this->load->model("User","user");
	}

	public function index()
	{
		if ( isset($_POST['adminlogin_x']) ) {
			$data['password'] = $this->input->post("password",true);
			$login = $this->sess->admin_set($data);
			if ( $login ) {
				redirect(base_url("admin"));
			} else {
				$this->sess->set_flash("Forbidden","Wrong password!","error");
				redirect(base_url());
			}
		} elseif ( isset($_POST['start_x']) ) {
			$name = $this->input->post("name",true);
			if ( $this->user->get_data(["name" => $name]) ) {
				$this->sess->set_flash("Name exist!","Pick another name!","warning");
				redirect(base_url());
			} else {
				$this->sess->start_game($name);
				redirect(base_url("start"));
			}
		} else {
			$data['pagetitle'] = "Home";
			$this->load->view("zzz/head",$data);
			$this->load->view("home/home");
			$this->load->view("zzz/foot");
		}
	}

	public function destroy_session()
	{
		$this->sess->destroy();
		redirect(base_url());
	}
}