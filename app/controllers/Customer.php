<?php

namespace app\controllers;

use stdClass;

class Customer extends \app\core\Controller
{

    function update()
    {
        if (!isset($_SESSION['customer_id'])) {
            header('location:/User/login');
            return;
        }

        $customer = new \app\models\Customer();
        $customer = $customer->getById($_SESSION['customer_id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $customer->first_name = $_POST['first_name'];
            $customer->last_name = $_POST['last_name'];
            $customer->email = $_POST['email'];
            $customer->password_hash = $_POST['password'];

            if (!empty($password)) {
                $customer->password_hash = password_hash($password, PASSWORD_DEFAULT);
            }

            $customer->update();
            header('location:/Customer/update');
        } else {
            $this->view('Customer/update', $customer);
        }
    }

    function logout(){
		session_destroy();
		header('location:/User/login');
	}
}