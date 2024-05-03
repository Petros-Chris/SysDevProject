<?php
namespace app\filters;

#[\Attribute]
class IsCustomer implements \app\core\AccessFilter{

	public function redirected(){
		if(!isset($_SESSION['customer_id'])){
            $_SESSION['url'] = $_SERVER['REQUEST_URI'];
			header('location:/User/login');
			return true;
		}
		return false;
	}

}