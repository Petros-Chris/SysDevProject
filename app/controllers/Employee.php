<?php

namespace app\controllers;

use stdClass;

#[\app\filters\IsEmployee]
class Employee extends \app\core\Controller
{

	function register()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$employee = new \app\models\Employee();

			$employee->first_name = $_POST['first_name'];
			$employee->last_name = $_POST['last_name'];
			$employee->email = $_POST['email'];
			$employee->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

			//I think I stopped this b/c it was too good 🤤

			// if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			// 	print("Invalid Email");
			// 	$this->view('User/register');
			// 	exit;
			// }

			$employee->insert();

			header('location:/Admin/index');
		} else {
			$this->view('Admin/createEmployee');
		}
	}

	function modify()
    {
        $product = new \app\models\Product();
        $product = $product->getId($_GET['id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //$product->product_id = $_GET['id'];  
            $product->brand = $_POST['brand'];
            $product->model = $_POST['model'];
            $product->color = $_POST['color'];
            $product->cost_price = $_POST['cost_price'];
            $product->shape = $_POST['shape'];
            $product->size = $_POST['size'];
            $product->optical_sun = $_POST['optical_sun'];
            $product->description = $_POST['description'];
            $product->quantity = $_POST['quantity'];

            if ($_POST['disable'] == null) {
                $product->disable = 0;
            } else {
                $product->disable = $_POST['disable'];
            }

            $product->update();
            header('location:/Admin/index');
        } else {
            $this->view('Admin/modify', $product);
        }
    }

	function index()
	{
		$this->view('Employee/index');
	}
}