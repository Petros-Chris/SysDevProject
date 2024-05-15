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