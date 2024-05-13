<?php

namespace app\controllers;

use stdClass;

class User extends \app\core\Controller
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
			include('app/views/footer.php');
		}
	}

	function login()
	{
		if (isset($_SESSION['customer_id']) || isset($_SESSION['employee_id']) || isset($_SESSION['isAdmin'])) {
			//header('location:/Customer/dashboard');

			//or if redirect isent such a great idea we could auto log out by
			//unset($_SESSION["customer_id"]);

			//if we want to delete the whole session we do
			$user = new \app\controllers\User();
			$user->logout();
		}
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$email = $_POST['email'];
			$password = $_POST['password'];

			$userContr = new \app\controllers\User();


			if($userContr->userSide($email, $password)) {
				exit;
			}
		
			

			if($userContr->employeeSide($email, $password)) {
				exit;
			}

			if($userContr->adminSide($email, $password)) {
				exit;
			}
		} else {
			$this->view('User/Login');
			include('app/views/footer.php');
		}

	}

	function userSide($email, $password)
	{
		$user = new \app\models\User();
		$user = $user->get($email);

		if ($user && password_verify($password, $user->password_hash)) {

			if ($user->disable == false) {
				$_SESSION['customer_id'] = $user->customer_id;

				if ($_SESSION['url'] != '') {
					 header("location:$_SESSION[url]");
				} else {
					header("location:/Product/listing");
					
				}
			}
			return true;
		} 
		return false;
	}

	function employeeSide($email, $password)
	{
		$employee = new \app\models\Employee();
		$employee = $employee->get($email);

		if ($employee->admin == 0 && password_verify($password, $employee->password_hash)) {
			$_SESSION['employee_id'] = $employee->employee_id;

			// if ($_SESSION['url'] != '') {
			// 	header("location:$_SESSION[url]");
			// } else {
				header("location:/Employee/index");
			// }
			return true;
		}
		return false;
	}

	function adminSide($email, $password)
	{
		$employee = new \app\models\Employee();
		$employee = $employee->get($email);

		if ($employee->admin == 1 && password_verify($password, $employee->password_hash)) {
			$_SESSION['isAdmin'] = $employee->admin;

			//if ($_SESSION['url'] != '') {
			//	header("location:$_SESSION[url]");
			//} else {
			header("location:/Admin/index");
			//}
		} else {
			header('location:/User/login');
			return true;
		}
		
	}

	function logout()
	{
		session_destroy();
		header('location:/User/login');
		//$this->view('User/login');
		echo ("
        <script>
        document.getElementById('popup').style.display = 'block'
        setTimeout(hidePopup, 3000);

        setTimeout(function() {
            popup.classList.add('popup-visible');
          }, 250);
        
        function hidePopup() {
                popup.classList.remove('popup-visible');
                
                setTimeout(function() {
                    popup.style.display = 'none'
                  }, 250);
          }
          </script>");
	}

	function contact()
	{
		$this->view('contact');
	}
}