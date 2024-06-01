<?php

namespace app\controllers;

use stdClass;
use chillerlan\Authenticator\{Authenticator, AuthenticatorOptions};
use chillerlan\QRCode\QRCode;

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
            $oldPass = $_POST['oldPassword'];


            if (password_verify($oldPass, $customer->password_hash)) {

                if (!empty($_POST['password'])) {
                    $customer->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $_SESSION['password_hash'] = $customer->password_hash;
                }
                $customer->update();
                header('location:/Customer/dashboard');

            } else {
                header('location:/Customer/update');
            }
        } else {
            include 'app/views/Customer/update.php';
            include 'app/views/footer.php';
        }
    }

    #[\app\filters\IsCustomer]
    function checkout()
    {
        $product = new \app\controllers\Cart();
        $product->viewCartCheckout();
        $this->view('Customer/checkout');
        include 'app/views/footer.php';
    }

    #[\app\filters\IsCustomer]
    function deactivate()
    {
        $customer = new \app\models\Customer();
        $customer = $customer->getById($_SESSION['customer_id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $password = $_POST['password'];

            if ($customer && password_verify($password, $customer->password_hash)) {
                $customer->disableOrEnable($_SESSION['customer_id'], 1);
                session_destroy();
            }
            header('location:/User/login');
        } else {
            $this->view('Customer/deactivate');
            include 'app/views/footer.php';
        }
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
            include 'app/views/footer.php';
        }
    }

    #[\app\filters\IsCustomer]
    function dashboard()
    {
        $this->view('Customer/dashboard');
        include 'app/views/footer.php';
    }

    function setup2fa()
    {
        $customer = new \app\models\Customer();
        $options = new AuthenticatorOptions();
        $authenticator = new Authenticator($options);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_SESSION['secret_setup'])) {
                $authenticator->setSecret($_SESSION['secret_setup']);
                $customer->secret = $_SESSION['secret_setup'];
            } else {
                header('location:/Customer/setup2fa');
            }
            $totp = $_POST['totp'];
            if ($authenticator->verify($totp)) {
                $customer->add2FA($_SESSION['customer_id']);
                header('location:/Customer/update');
            } else {
                $_SESSION['error_message'] = "something so it exists";
                header('location:/Customer/setup2fa');
            }

        } else {
            $_SESSION['secret_setup'] = $authenticator->createSecret();
            $uri = $authenticator->getUri('Mes Yeux Tes Yeux', 'localhost');
            $QRCode = (new QRCode)->render($uri);
            include 'app/views/Customer/setup2fa.php';
            include 'app/views/footer.php';
        }
    }
    function disable2fa()
    {
        $customer = new \app\models\Customer();
        $customerInfo = $customer->getById($_SESSION['customer_id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $options = new AuthenticatorOptions();
            $authenticator = new Authenticator($options);

            $authenticator->setSecret($customerInfo->secret);
            if ($authenticator->verify($_POST['totp'])) {

                $password = $_POST['password'];

                if ($customer && password_verify($password, $customerInfo->password_hash)) {
                    $customer->add2FA($_SESSION['customer_id']);
                    header('location:/Customer/update');
                } else {
                    $_SESSION['error_message'] = "something so it exists";
                    header('location:/Customer/disable2fa');
                }
            } else {
                $_SESSION['error_message'] = "something so it exists";
                header('location:/Customer/disable2fa');
            }
        } else {
            $this->view('Customer/disable2fa');
            include 'app/views/footer.php';
        }
    }
}
