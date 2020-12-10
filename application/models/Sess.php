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
		$answer = [];

		$_SESSION["game_detail"] = [
			"player_name" => $name,
			"questions" => $get_question,
			"answer" => $answer
		];
	}

	public function destroy()
	{
		session_destroy();
	}
}