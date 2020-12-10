<?php 

class Sess extends CI_Model {
	public function set_flash($title,$msg,$status)
	{
		$_SESSION["flash_data"] = [
			"title" => $title,
			"msg" => $msg,
			"status" => $status
		];
		return true;
	}

	public function admin_set($data)
	{
		$password = $data['password'];
		if ( $password == "123" ) {
			$_SESSION["admin"] = true;
			return true;
		} else {
			return false;
		}
	}

	public function start_game($name)
	{
		$get_question = $this->question->get_random(10);
		$answer = [1 => "",2 => "",3 => "",4 => "",5 => "",6 => "",7 => "",8 => "",9 => "",10 => ""];

		$_SESSION["game_detail"] = [
			"player_name" => $name,
			"questions" => $get_question,
			"answer" => $answer
		];

		return true;
	}

	public function finish_game()
	{
		$questions = $_SESSION["game_detail"]['questions'];
		$answer = $_SESSION["game_detail"]['answer'];
		$correct = 0;

		$wrong_answer = [];

		$i = 1;
		foreach ($questions as $question) {
			if ( $question['correct'] == $answer[$i] ) {
				$correct++;
			} else {
				array_push($wrong_answer, $i);
			}
			$i++;
		}

		$score = $correct * 10;

		$data = [
			"name" => $_SESSION['game_detail']['player_name'],
			"score" => $score,
			"submit_date" => date("Y-m-d")
		];
		$this->db->insert("tblboard",$data);

		$_SESSION["game_detail"]['wrong_answer'] = $wrong_answer;
		$_SESSION["game_detail"]['score'] = $score;
	}

	public function push_answer($q_number,$answer)
	{
		$_SESSION["game_detail"]['answer'][$q_number] = $answer;
		return true;
	}

	public function setting($data)
	{
		$_SESSION["setting"] = $data;
	}

	public function destroy()
	{
		session_destroy();
	}
}