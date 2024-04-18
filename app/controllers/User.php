<?php

namespace app\controllers;

use stdClass;

class User extends \app\core\Controller{

	function register(){
		if($_SERVER['REQUEST_METHOD'] === 'POST'){

			$user = new \app\models\User();

			$user->first_name = $_POST['first_name'];
            $user->last_name = $_POST['last_name'];
            $user->email = $_POST['email'];
			$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

			$user->insert();

			header('location:/User/login');
		}else{
			$this->view('User/register');
		}
	}

	// function login(){
	// 	//show the login form and log the user in
	// 	if($_SERVER['REQUEST_METHOD'] === 'POST'){

	// 		$first_name = $_POST['first_name'];
	// 		$user = new \app\models\User();
	// 		$user = $user->get($username);
	// 		//check the password against the hash
	// 		$password = $_POST['password'];
	// 		if($user && $user->active && password_verify($password, $user->password_hash)){
	// 			//remember that this is the user logging in...
	// 			$_SESSION['user_id'] = $user->user_id;

	// 			header('location:/User/securePlace');
	// 		}else{
	// 			header('location:/User/login');
	// 		}
	// 	}else{
	// 		$this->view('User/login');
	// 	}
	// }
}