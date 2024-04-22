<?php

namespace app\controllers;

use stdClass;

class Admin extends \app\core\Controller
{
    function listings() {
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
            
            echo "<a href='../Admin/modify?id=$pro_id'> Product -- $pro_id</a><br>";
        }

        $this->view('Product/listing');
    }

    function index() {

        $this->view('Admin/index');
    }

    function modify()
    {
        $product = new \app\models\Product();
        $product = $product->get($_GET['id']);
        

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