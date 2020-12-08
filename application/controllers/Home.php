<?php 

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Sess","sess");
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