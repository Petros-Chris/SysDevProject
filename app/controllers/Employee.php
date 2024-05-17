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

    function index()
    {
        $this->view('Employee/index');
    }
}