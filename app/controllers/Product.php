<?php

namespace app\controllers;

use stdClass;

class Product extends \app\core\Controller
{
    function listings()
    {
        $product = new \app\models\Product();
        $wishlist = new \app\models\Wishlist();

        $products = [];
        $wishlistItems = [];

        if (isset($_SESSION['customer_id'])) {
            $wishlistItems = $wishlist->getAllHearts($_SESSION['customer_id']);
        }

        if (isset($_GET['filter'])) {
            $products = $product->getFilter($_GET['type'], $_GET['filter']);
            
        } else {
            $products = $product->getAll();
            
        }
        include 'app/views/Product/listing.php';
        include 'app/views/footer.php';
    }

    function description()
    {
        $product = new \app\models\Product();
        $item = $product->getId($_GET['id']);

        $_SESSION['product_id'] = $_GET['id'];

        $re = new \app\controllers\Review();
        $cart = new \app\controllers\Cart();


        $this->view('Product/index', $item);
        $cart->displayCart();
        $re->displayReview();


    }

    public function search()
    {
        $product = new \app\models\Product();

        $products = $product->getMultiFilter('color', 'brand', 'shape', 'description', 'optical_sun', 'model', $_GET['search']);

        include 'app/views/Product/listing.php';
        include 'app/views/footer.php';
    }

    public function allBrands()
    {
        $product = new \app\models\Product();
        $products = $product->getAllBrands();

        include 'app/views/Product/allBrands.php';
        include 'app/views/footer.php';
    }
}