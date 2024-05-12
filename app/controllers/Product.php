<?php

namespace app\controllers;

use stdClass;

class Product extends \app\core\Controller {

    function listings() {
        $product = new \app\models\Product();
        $productCont = new \app\controllers\Product();

        if(isset($_GET['filter'])) {
            $productCont -> listingFilter($product, $_GET['type'], $_GET['filter']);
        } else { 
		$products = $product->getAll();

        //This works to display the search bar first but maybe we can find a better way?
        //Maybe you could make it add each product to a div instead of just at the bottom of the page
        echo"<form method='POST' action='/Product/search'>
                <input name='search_box' placeholder='eg: Blue'>
                <input type='submit' name='action' value='color'>
                <input type='submit' name='action' value='content'>
            </form>";

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
            echo "<a href='../Product/index?id=$pro_id'> <div class='product-container'>
                    <div class='product-image'>
                    <img src='/../app/questionMark.png' alt='$pro_description'>
                        </div>
                            <div class='product-details'></a>
                            <span class='heart-icon' onclick='toggleHeart(this, $pro_id)'>&#x2661;</span>
                            <div class='product-brand'>$pro_brand</div>
                            <div class='product-price'>$$pro_price</div>
                        </div>
                    </div>";
        }
    }
        // $this->view('Product/listing');
    }

    public function listingFilter($product, $type, $filter) {
        $products = $product->getFilter($type, $filter);
        include 'app/views/Product/listing.php';
        include 'app/views/footer.php';
        // $this->view('Product/listing', $products);
    }

    // function listingFilter($product, $type, $filter) {
	// 	$products = $product->getFilter($type, $filter);

    //     //This works to display the search bar first but maybe we can find a better way?
    //     //Maybe you could make it add each product to a div instead of just at the bottom of the page
    //     echo"<form method='POST' action='/Product/search'>
    //             <input name='search_box' placeholder='eg: Blue'>
    //             <input type='submit' name='action' value='color'>
    //             <input type='submit' name='action' value='content'>
    //         </form>";

    //     foreach ($products as $product) {
    //         $pro_id = $product->product_id;
	// 		$pro_brand = $product->brand;
	// 		$pro_model = $product->model;
	// 		$pro_color = $product->color;
    //         $pro_price = $product->cost_price;
    //         $pro_shape = $product->shape;
    //         $pro_size = $product->size;
    //         $pro_optial_sun = $product->optical_sun;
    //         $pro_description = $product->description;
    //         echo "<a href='../Product/index?id=$pro_id'> <div class='product-container'>
    //                 <div class='product-image'>
    //                 <img src='/../app/questionMark.png' alt='$pro_description'>
    //                     </div>
    //                         <div class='product-details'></a>
    //                         <span class='heart-icon' onclick='toggleHeart(this, $pro_id)'>&#x2661;</span>
    //                         <div class='product-brand'>$pro_brand</div>
    //                         <div class='product-price'>$$pro_price</div>
    //                     </div>
    //                 </div>";
    //     }
    // }
        

    function description() {
        $product = new \app\models\Product();
        $item = $product->getId($_GET['id']);
        
        $_SESSION['product_id'] = $_GET['id'];

            $productControl = new \app\controllers\Product();
           
            
            $this->view('Product/index', $item);
            $productControl->viewCart();
        $review = new \app\controllers\Review();
        $review->displayReview();
    }    

    public function addToCart() {

        if(isset($_POST['id'])) {
            $product = new \app\models\Product();
            $item = $product->getId($_POST['id']);

            if (isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                $length = count($cart);
                $_SESSION['cart'][$length] = $item; 
            } else {
                $_SESSION['cart'][0] = $item;
            }
            
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

                echo("HI");
                echo "<script> 
                        document.getElementById('popup').innerHTML += 
                        '<a href=\"/Product/index?id=$pro_id\">$pro_brand $pro_shape $pro_price</a>' +
                        '<span onclick=\"removeProductFromCart($pro_id)\">&#128465;</span><br>';
                    </script>";  
            }
                sleep(2);
                echo "<script> 
                        document.getElementById('popup').innerHTML += 
                        'Total: $price <br> <input type=button value=proceed>';

                        document.getElementById('popup').style.display = 'block';
                        setTimeout(hidePopup, 3000);
                    
                        setTimeout(function() {
                            popup.classList.add('popup-visible');
                        }, 250);
                    </script>";
        }
    }
    
    public function removeFromCart() {
        if (isset($_SESSION['cart'])) {

            if(isset($_POST['id'])) {
                $cart = $_SESSION['cart'];

                $index = array_search($_POST['id'], array_column($cart, 'product_id'));

                if ($index !== false) {
                    unset($cart[$index]);
                    $_SESSION['cart'] = array_values($cart);
                }
            }
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

    public function viewCartCheckout() {
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

                echo "<p>
                        <a href=\"/Product/index?id=$pro_id\">$pro_brand $pro_shape $pro_price</a>
                        <span onclick=\"removeProductFromCart($pro_id)\">&#128465;</span><br>
                    </p>" ;
            }
                
                echo "<p>
                        Total: $price <br>
                    </p>";
        }
    }

}

