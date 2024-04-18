<?php

namespace app\controllers;

use stdClass;

class User extends \app\core\Controller{

	function register(){
		if($_SERVER['REQUEST_METHOD'] === 'POST'){

			$user = new \app\models\User();

			$user->username = $_POST['username'];
			$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

			$user->insert();

			header('location:/User/login');
		}else{
			$this->view('User/register');
		}
	}
}