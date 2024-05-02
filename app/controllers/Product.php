<?php

namespace app\controllers;

use stdClass;

class Product extends \app\core\Controller {

    function listings() {
        $product = new \app\models\Product();


		$products = $product->getAll();

        $this->view('Product/listing');
        
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
            echo "<a href='../Product/index?id=$pro_id'> Product <div class='product-container'>
    <div class='product-image'>
      <img src='/../app/questionMark.png' alt='$pro_description'>
    </div>
    <div class='product-details'>
      <span class='heart-icon'>&#x2661;</span> <!-- Unicode heart symbol -->
      <div class='product-brand'>$pro_brand</div>
      <div class='product-price'>$$pro_price</div>
    </div>
  </div></a><br>";
        }
    }

    function description() {
        $product = new \app\models\Product();
        $item = $product->get($_GET['id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productControl = new \app\controllers\Product();
            $productControl->addToCart($item);
            $productControl->viewCart();
            
            $this->view('Product/index', $item);
        } else {

        $this->view('Product/index', $item);
        }
    }    

    public function addToCart($item) {
        require_once ('app/models/Product.php');
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
            $length = count($cart);
            $_SESSION['cart'][$length] = $item; 
        } else {
            $_SESSION['cart'][0] = $item;
        }
    }

    public function viewCart() {
        if (isset($_SESSION['cart'])) {
            $cart = ($_SESSION['cart']);
            $price = 0;

            foreach($cart as $product) {
                $pro_id = $product->product_id;
                $pro_brand = $product->brand;
                $pro_model = $product->model;
                $pro_color = $product->color;
                $pro_price = $product->cost_price;
                $pro_shape = $product->shape;
                $pro_size = $product->size;
                $pro_optial_sun = $product->optical_sun;
                $pro_description = $product->description;
                    $price += $pro_price;
                echo "<a href = '/Product/index?id=$pro_id'>$pro_brand $pro_shape $pro_price</a> <br>";
                
            }
            echo "Total: $price <br>";
            echo "<input type='button' value='proceed to checkout'>";
        }
    }
    
    public function removeFromCart() {
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
        }
    }

    public function search() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $searchTerm = $_POST['search_box'];
			$product = new \app\models\Product();   

                $this->view('/Product/listing');

            if ($_POST['action'] == 'color') {
               $products = $product->getColor($searchTerm);
			   
				foreach ($products as $producta) {
                    $pro_id = $producta->product_id;
					$pro_brand = $producta->brand;
					echo "<a href='../Product/index?brand=$pro_brand&id=$pro_id'>$pro_brand</a><br>";
				}
            } 
        }
    }
}

