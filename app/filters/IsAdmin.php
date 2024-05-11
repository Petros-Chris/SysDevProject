<?php
namespace app\filters;

#[\Attribute]
class IsAdmin implements \app\core\AccessFilter{

	public function redirected(){
		if(!isset($_SESSION['isAdmin'])){
            $_SESSION['url'] = $_SERVER['REQUEST_URI'];
			header('location:/User/login');
			return true;
		}
		return false;
	}

}