<?php 

class Leaderboard extends CI_Controller {
	public function index()
	{
		$data['pagetitle'] = "Home";
		$this->load->view("zzz/head",$data);
		$this->load->view("leaderboard/leaderboard");
		$this->load->view("zzz/foot");
	}
}