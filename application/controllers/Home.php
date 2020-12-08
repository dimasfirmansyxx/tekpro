<?php 

class Home extends CI_Controller {
	public function index()
	{
		$data['pagetitle'] = "Home";
		$this->load->view("zzz/head",$data);
		$this->load->view("home/home");
		$this->load->view("zzz/foot");
	}
}