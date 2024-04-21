<?php

namespace app\controllers;

use stdClass;

class Product extends \app\core\Controller {

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
            
            echo "<a href='../Product/index?id=$pro_id'> Product -- $pro_id</a><br>";
        }

        $this->view('Product/listing');
    }

    function description() {
        $product = new \app\models\Product();

        $item = $product->get($_GET['id']);

        $this->view('Product/index', $item);
    }

    public function search() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $searchTerm = $_POST['search_box'];
			$product = new \app\models\Product(); 

            if ($_POST['action'] == 'title') {
               $products = $product->getColor($searchTerm);
			   

				foreach ($products as $product) {
                    $pro_id = $product->product_id;
					$pro_brand = $product->brand;
					echo "<a href='../Product/search?brand=$pro_brand&id=$pro_id'>$pro_brand</a><br>";
				}
                
                $this->view('/Product/listing');
                echo('asd');
            } 
            $this->view('/Product/listing');
                echo('oops');
        }
    }
}