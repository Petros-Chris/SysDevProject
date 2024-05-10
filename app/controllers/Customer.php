<?php

namespace app\controllers;

use stdClass;

#[\app\filters\IsCustomer]
class Customer extends \app\core\Controller
{

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
            $this->view('Customer/update', $customer);
        }
    }

    function checkout()
    {
        $product = new \app\controllers\Product();
        $product->viewCartCheckout();
        $this->view('Customer/checkout');
    }

    function logout()
    {
        session_destroy();
        //header('location:/User/login');
        $this->view('User/login');
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
        }
    }

    function index()
    {
        $this->view('Customer/home');
    }

    function paypal(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $order = new \app\models\Order();

            $order->product_id = 1;
            $order->customer_id = $_SESSION['customer_id'];
            $order->address = $_POST['address'];
            $order->total = $_POST['total'];

            $order->insert();

            header('location:/User/login');
        } else {
            $this->view('client/checkout');
        }
    }


    function dashboard()
    {
        $this->view('Customer/dashboard');
    }
}