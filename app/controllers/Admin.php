<?php

namespace app\controllers;

use stdClass;

class Admin extends \app\core\Controller
{
    #[\app\filters\IsEmployee]
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

            echo "<a href='../Employee/modify?id=$pro_id'> Product -- $pro_id</a><br>";
        }

        $this->view('Product/listing');
        include 'app/views/footer.php';
    }

    #[\app\filters\IsAdmin]
    function index()
    {
        $this->view('Admin/index');
        include 'app/views/footer.php';
    }

    #[\app\filters\IsAdmin]
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

            $product_id = $product->insert();

            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                $target_dir = "app/resources/images/";
                $target_file = $target_dir . "product_" . $product_id . ".png";
                $imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));


                if ($imageFileType == 'png') {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

                    } else {
                        $error = "Upload has had an error, please try again or contact an admin.";
                    }
                } else {
                    $error = "Invalid file format, we only accept '.png'.";
                }
            }


            if ($error == null) {
                header('location:/Admin/index');
            } else {
                $this->view('Admin/modify', $product);
                echo ($error);

            }
        } else {
            $this->view('Admin/create');
        }
    }

    #[\app\filters\IsEmployee]
    function modify()
    {
        $product = new \app\models\Product();
        $product = $product->getId($_GET['id']);
        $error = null;

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

            if (isset($_POST['disable'])) {
                if ($_POST['disable'] == null) {
                    $product->disable = 0;
                } else {
                    $product->disable = $_POST['disable'];
                }
            }

            $product->update();

            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                $target_dir = "app/resources/images/";
                $target_file = $target_dir . "product_" . $product->product_id . ".png";
                $imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

                if ($imageFileType == 'png') {
                    $error = null;
                    if (file_exists($target_file)) {
                        unlink($target_file);
                    }

                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        $error = null;

                    } else {

                        $error = "Upload has had an error, please try again or contact an admin.";
                    }
                } else {
                    $error = "Invalid file format, we only accept '.png'.";
                }

            }

            if ($error == null) {
                header('location:/Admin/productListing');
            } else {
                $this->view('Admin/modify', $product);
                echo ($error);

            }
        } else {
            $this->view('Admin/modify', $product);
        }
    }

    function logout()
    {
        session_destroy();
        header('location:/User/login');
    }

    #[\app\filters\IsEmployee]
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


