<?php

namespace app\controllers;

use stdClass;

#[\app\filters\IsAdmin]
class Admin extends \app\core\Controller
{
    function listings()
    {
        $product = new \app\models\Product();

        $products = $product->getAll();

        foreach ($products as $product) {
            $pro_id = $product->product_id;
            $pro_brand = $product->brand;
            $pro_model = $product->model;
            $pro_color = $product->color;
            $pro_price = $product->cost_price;
            $pro_shape = $product->shape;
            $pro_size = $product->size;
            $pro_optial_sun = $product->optical_sun;
            $pro_description = $product->description;
            $pro_quantity = $product->quantity;
            $pro_disable = $product->disable;

            echo "<a href='../Admin/modify?id=$pro_id'> Product -- $pro_id</a><br>";
        }

        $this->view('Product/listing');
    }

    function index()
    {
        $this->view('Admin/index');
    }

    function create()
    {
        $product = new \app\models\Product();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $product->brand = $_POST['brand'];
            $product->model = $_POST['model'];
            $product->color = $_POST['color'];
            $product->cost_price = $_POST['cost_price'];
            $product->shape = $_POST['shape'];
            $product->size = $_POST['size'];
            $product->optical_sun = $_POST['optical_sun'];
            $product->description = $_POST['description'];
            $product->quantity = $_POST['quantity'];
            $product->disable = 0;

            var_dump($product);
            $product->insert();
            header('location:/Admin/index');
        } else {
            $this->view('Admin/create');
        }
    }

    function logout()
    {
        session_destroy();
        header('location:/User/login');
    }

    function customerList()
    {
        $customer = new \app\models\Customer();
        $customers = $customer->getAll();

        foreach ($customers as $customer) {
            $customer->whole_customer = $customer;

            switch ($customer->disable) {
                case 0:
                    $customer->disable_text = "Enabled";
                    break;
                case 1:
                    $customer->disable_text = "Disabled";
                    break;
            }

        }
        include 'app/views/Admin/customerList.php';
        include 'app/views/footer.php';

    }

    function deactivate()
    {
        $customer = new \app\models\Customer();
        $cust = $customer->getById($_GET['id']);

        $this->view('Admin/disableCustomer', $cust);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $password = $_POST['password'];

            //if($customer && password_verify($password, $customer->password_hash)){

            $customer->disableOrEnable($_GET['id'], 1);
            // session_destroy();
            //}
            //  header('location:/User/login');
            //} else {
            header('location:/Admin/customerList');
        }
    }

    function reactivate()
    {
        $customer = new \app\models\Customer();
        $cust = $customer->getById($_GET['id']);

        $this->view('Admin/enableCustomer', $cust);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $password = $_POST['password'];

            //if($customer && password_verify($password, $customer->password_hash)){

            $customer->disableOrEnable($_GET['id'], 0);
            // session_destroy();
            //}
            //  header('location:/User/login');
            //} else {
            header('location:/Admin/customerList');
        }
    }

    function viewCustomerOrders()
    {
        $order = new \app\models\Order();
        $allCustOrders = $order->getAllOrders();

        //To Get Customer Information (needed?)
        foreach ($allCustOrders as $custOrder) {
            // $customerInfo = $custOrder->getById($custOrder->customer_id);
            // $custOrder->customer_information = $customerInfo;

            $status = $custOrder->status;

            switch ($status) {
                case 1: {
                    $custOrder->statusText = "Processed";
                    break;
                }
                default: {
                    $custOrder->statusText = "Needs To Be Processed";
                    break;
                }
            }
        }
        include 'app/views/Admin/orders.php';
        include 'app/views/footer.php';
    }
}