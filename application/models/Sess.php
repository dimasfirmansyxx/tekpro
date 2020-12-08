<?php 

class Sess extends CI_Model {
	public function set_flash($title,$msg,$status)
	{
		$_SESSION["flash_data"] = [
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
}