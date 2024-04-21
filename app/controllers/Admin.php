<?php

namespace app\controllers;

use stdClass;

class Admin extends \app\core\Controller
{

    function update()
    {
        $admin = new \app\models\Admin();
        $admin = $admin->getById($_SESSION['customer_id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $admin->first_name = $_POST['first_name'];
            $admin->last_name = $_POST['last_name'];
            $admin->email = $_POST['email'];
            $admin->password_hash = $_POST['password'];

            if (!empty($password)) {
                $admin->password_hash = password_hash($password, PASSWORD_DEFAULT);
            }

            $admin->update();
            header('location:/Customer/update');
        } else {
            $this->view('Customer/update', $admin);
        }
    }

    function logout(){
		session_destroy();
		header('location:/User/login');
	}
}