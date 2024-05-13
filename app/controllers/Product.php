<?php

namespace app\controllers;

use stdClass;

class Product extends \app\core\Controller
{
    function listings()
    {
        $product = new \app\models\Product();
        if (isset($_GET['filter'])) {
            $products = $product->getFilter($_GET['type'], $_GET['filter']);
            include 'app/views/Product/listing.php';
            include 'app/views/footer.php';
        } else {
            $products = $product->getAll();
            include 'app/views/Product/listing.php';
            include 'app/views/footer.php';
        }
    }

    function description()
    {
        $product = new \app\models\Product();
        $item = $product->getId($_GET['id']);

        $_SESSION['product_id'] = $_GET['id'];

        $re = new \app\controllers\Review();
        $cart = new \app\controllers\Cart();


        $this->view('Product/index', $item);
        $re->displayReview();
        $cart->displayCart();

    }

    public function search()
    {
        $product = new \app\models\Product();

        $products = $product->getMultiFilter('color', 'brand', 'shape', 'description', 'optical_sun', $_GET['search']);

        include 'app/views/Product/listing.php';
        include 'app/views/footer.php';
    }
}