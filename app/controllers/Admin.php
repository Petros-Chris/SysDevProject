<?php

namespace app\controllers;

use stdClass;

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

    function modify()
    {
        //TESTTTT
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

        $this->view('Admin/customerList');

        foreach ($customers as $customer) {
            $cust_id = $customer->customer_id;
            $cus_first_name = $customer->first_name;
            $cus_last_name = $customer->last_name;
            $cus_email = $customer->email;
            $cus_email_activated = $customer->email_activated;
            $cus_disabled = $customer->disable;

            echo "<a href='../Admin/disableCustomer?id=$cust_id'>$cus_last_name $cus_first_name is Disabled $cus_disabled</a><br>";
        }
    }

    function deactivate()
    {
        $customer = new \app\models\Customer();
        $cust = $customer->getById($_GET['id']);

        $this->view('Admin/disableCustomer', $cust);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $password = $_POST['password'];

            //Currently, Admin and Employee have no login system, so there is no password to get
            //if($customer && password_verify($password, $customer->password_hash)){

            $customer->disable($_GET['id']);
            session_destroy();
            //}
            //  header('location:/User/login');
            //} else {
            header('location:/Admin/customerList');
        }
    }
}


