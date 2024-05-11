<?php

namespace app\controllers;

use stdClass;

class Employee extends \app\core\Controller
{

function register()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$user = new \app\models\User();

			$user->first_name = $_POST['first_name'];
			$user->last_name = $_POST['last_name'];
			$user->email = $_POST['email'];
			$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

			//I think I stopped this b/c it was too good 🤤

			// if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			// 	print("Invalid Email");
			// 	$this->view('User/register');
			// 	exit;
			// }

			$user->insert();

			header('location:/User/login');
		} else {
			$this->view('User/register');
		}
	}
}