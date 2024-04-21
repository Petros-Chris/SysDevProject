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
        $productg = $product->get('81');
        

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            
            $productg->brand = $_POST['brand'];
            $productg->model = $_POST['model'];
            $productg->color = $_POST['color'];
            $productg->cost_price = $_POST['cost_price'];
            $productg->shape = $_POST['shape'];
            $productg->size = $_POST['size'];
            $productg->optical_sun = $_POST['optical_sun'];
            $productg->description = $_POST['description'];

            var_dump($productg);
            $productg->update();
            //header('location:/Admin/index');
        } else {
            $this->view('Admin/modify', $productg);
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