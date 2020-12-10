<?php 

class Start extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Sess","sess");
		$this->load->model("Question","question");
		$this->load->model("User","user");

		if ( !isset($_SESSION["game_detail"]) ) {
			redirect(base_url());
		}
	}

	public function index($q_number = 1)
	{
		$data['pagetitle'] = "Game";
		$data['q_number'] = $q_number;
		$data['question'] = $_SESSION["game_detail"]['questions'][$q_number - 1];
		$data['options'] = $this->question->get_options(["id_question" => $data['question']['id_question']]);
		$this->load->view("zzz/head",$data);
		$this->load->view("start/start");
		$this->load->view("zzz/foot");
	}

	public function push($q_number, $answer)
	{
		$this->sess->push_answer($q_number,$answer);
		if ( $q_number >= 10 ) {
			redirect(base_url("start/finish"));
		} else {
			$q_number++;
			$direct = "start/index/" . $q_number;
			redirect(base_url($direct));
		}
	}

	public function finish()
	{
		$data['pagetitle'] = "Game";
		$data['answers'] = $_SESSION["game_detail"]['answer'];
		$this->load->view("zzz/head",$data);
		$this->load->view("start/finish");
		$this->load->view("zzz/foot");
	}
}