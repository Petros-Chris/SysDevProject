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

						// if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			// 	print("Invalid Email");
			// 	$this->view('User/register');
			// 	exit;
			// }
			
			$user->insert();

			header('location:/User/login');
		}else{
			$this->view('User/register');
		}
	}
  
	function login(){
		if($_SERVER['REQUEST_METHOD'] === 'POST'){

			$email = $_POST['email'];
			$user = new \app\models\User();
			$user = $user->get($email);
			$password = $_POST['password'];
			
			if($user && password_verify($password, $user->password_hash)){

				if($user->disable == false) {
					$_SESSION['customer_id'] = $user->customer_id;

					if($_SESSION['url'] != '') {
						header("location:$_SESSION[url]");
					} else {
						header("location:/Product/listing");
					}
				}
			} else {
				header('location:/User/login');
			}
		}else{
			$this->view('User/login');
		}
	}

	function contact() {
		$this->view('contact');
	}
}