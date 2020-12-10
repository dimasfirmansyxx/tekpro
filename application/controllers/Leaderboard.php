<?php 

class Leaderboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("User","user");
	}

	public function index()
	{
		$data['pagetitle'] = "Leaderboard";
		$data['users'] = $this->user->get_leaderboard();
		$this->load->view("zzz/head",$data);
		$this->load->view("leaderboard/leaderboard");
		$this->load->view("zzz/foot");
	}
}