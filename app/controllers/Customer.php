<?php

namespace app\controllers;

use stdClass;


class Customer extends \app\core\Controller
{

    #[\app\filters\IsCustomer]
    function update()
    {
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
            include 'app/views/Customer/update.php';
            include ('app/views/footer.php');
        }
    }

    #[\app\filters\IsCustomer]
    function checkout()
    {
        $product = new \app\controllers\Cart();
        $product->viewCartCheckout();
        $this->view('Customer/checkout');
        include ('app/views/footer.php');
    }

    #[\app\filters\IsCustomer]
    function deactivate()
    {
        $customer = new \app\models\Customer();
        $customer = $customer->getById($_SESSION['customer_id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $password = $_POST['password'];

            if ($customer && password_verify($password, $customer->password_hash)) {

                $customer->disable($_SESSION['customer_id']);
                session_destroy();
            }
            header('location:/User/login');
        } else {
            $this->view('Customer/deactivate');
            include ('app/views/footer.php');
        }
    }

    function index()
    {

        

        $this->view('Customer/home');
        include('app/views/footer.php');

        
    }

    #[\app\filters\IsCustomer]
    function paypal()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $order = new \app\models\Order();

            $order->product_id = 1;
            $order->customer_id = $_SESSION['customer_id'];
            $order->address = $_POST['address'];
            $order->total = $_POST['total'];

            //$order->insert();

            header('location:/User/login');
        } else {
            $this->view('client/checkout');
            include ('app/views/footer.php');
        }
    }


    #[\app\filters\IsCustomer]
    function dashboard()
    {
        $this->view('Customer/dashboard');
        include ('app/views/footer.php');
    }

    function about()
    {
        $this->view('Customer/about');
        include ('app/views/footer.php');
    }

}