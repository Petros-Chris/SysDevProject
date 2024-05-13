<?php

namespace app\controllers;

use stdClass;

class Cart extends \app\core\Controller
{

    public function viewCartCheckout()
    {
        if (isset($_SESSION['cart'])) {
            $cart = ($_SESSION['cart']);
            $price = 0;

            foreach ($cart as $product) {
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
                    </p>";
            }

            echo "<p>
                        Total: $price <br>
                    </p>";
        }
    }

    public function addToCart()
    {
        if (isset($_POST['id'])) {
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

    public function viewCart()
    {
        if (isset($_SESSION['cart'])) {

            $cart = ($_SESSION['cart']);
            $price = 0;

            foreach ($cart as $product) {
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

                echo ("HI");
                echo "<script> 
                        document.getElementById('popup').innerHTML += 
                        '<a href=\"/Product/index?id=$pro_id\">$pro_brand $pro_shape $pro_price</a>' +
                        '<span onclick=\"removeProductFromCart($pro_id)\">&#128465;</span><br>';
                    </script>";
            }
            echo "<script> 
                        document.getElementById('popup').innerHTML += 
                        'Total: $price <br> <input type=button value=proceed>';

                        document.getElementById('popup').style.display = 'block';
                        setTimeout(hidePopup, 3000);
                    
                        setTimeout(function() {
                            popup.classList.add('popup-visible');
                        }, 250);
                    </script>";
        } else {
            echo ("OOPS");
        }

    }

    public function removeFromCart()
    {
        if (isset($_SESSION['cart'])) {

            if (isset($_POST['id'])) {
                $cart = $_SESSION['cart'];

                $index = array_search($_POST['id'], array_column($cart, 'product_id'));

                if ($index !== false) {
                    unset($cart[$index]);
                    $_SESSION['cart'] = array_values($cart);
                }
            }
        }
    }

    function displayCart()
    {

        $this->viewCart();

    }
}