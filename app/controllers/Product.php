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
            $pro_price = $product->price;
            $pro_shape = $product->shape;
            $pro_size = $product->size;
            $pro_optial_sun = $product->optial_sun;
            $pro_description = $product->description;
            
            echo "<a href='../Product/index?id=$pro_id'>$pro_brand -- sd</a><br>";
        }

        $this->view('Product/listing');
    }

    function description() {
        $product = new \app\models\Product();

        $item = $product->get($_GET['id']);

        $this->view('Product/index', $item);
    }
}