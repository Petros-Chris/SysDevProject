<?php

namespace app\controllers;

use stdClass;

class Admin extends \app\core\Controller
{

    function index() {

        $this->view('Admin/index');
    }

    function modify()
    {
        $product = new \app\models\Product();
        $product = $product->get('81');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $product->brand = $_POST['brand'];
            $product->model = $_POST['model'];
            $product->color = $_POST['color'];
            $product->cost_price = $_POST['cost_price'];
            $product->shape = $_POST['shape'];
            $product->size = $_POST['size'];
            $product->optical_sun = $_POST['optical_sun'];
            $product->description = $_POST['description'];

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

            $product->insert();
            header('location:/Admin/index');
        } else {
            $this->view('Admin/create');
        }
    }

    function logout(){
		session_destroy();
		header('location:/User/login');
	}
}