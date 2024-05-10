<?php

namespace app\controllers;

use stdClass;

class Wishlist extends \app\core\Controller
{

    #[\app\filters\IsCustomer]
    function addToWishlist() 
    {
        $wishlist = new \app\models\Wishlist();

        if(isset($_POST['id'])) {
        $wishlist->product_id  = $_POST['id'];
        $wishlist->customer_id = $_SESSION['customer_id'];
        $wishlist->insert();
        }
    }

    #[\app\filters\IsCustomer]
    function displayWishlist() 
    {
        $wishlist = new \app\models\Wishlist();
        $wishCont = new \app\controllers\Wishlist();

		$list = $wishlist->getAllFromCustomer($_SESSION['customer_id']);
        
        foreach ($list as $item) {
            $pro_id = $item->product_id;
            $cus_id = $item->customer_id;
            $wishCont->getProductInformation($pro_id);
        }
    }

    function getProductInformation($product_id) 
    {
        $product = new \app\models\Product();
        $products = $product->getId($product_id);

        $pro_brand = $product->brand;
        $pro_model = $product->model;
        $pro_color = $product->color;
        $pro_price = $product->cost_price;
        $pro_shape = $product->shape;
        $pro_size = $product->size;
        $pro_optial_sun = $product->optical_sun;
        $pro_description = $product->description;
        
        echo "<a href='../Product/index?id=$product_id'> Product <div class='product-container'>
                    <div class='product-image'>
                    <img src='/../app/questionMark.png' alt='$pro_description'>
                </div>
                    <div class='product-details'>
                    <span class='heart-icon'>&#x2661;</span>
                    <div class='product-brand'>$pro_brand</div>
                    <div class='product-price'>$$pro_price</div>
                </div>
            </div></a><br>";
    }

    #[\app\filters\IsCustomer]
    function removeFromWishlist() 
    {
        $wishlist = new \app\models\Wishlist();
        if(isset($_POST['id'])) {
            $wishlist->deleteItem($_POST['id'], $_SESSION['customer_id']);
        }
    }
}