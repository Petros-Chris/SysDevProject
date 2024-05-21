<?php

namespace app\controllers;

use stdClass;

class Wishlist extends \app\core\Controller
{

    #[\app\filters\IsCustomer]
    function addToWishlist()
    {
        $wishlist = new \app\models\Wishlist();

        if (isset($_POST['id'])) {
            $wishlist->product_id = $_POST['id'];
            $wishlist->customer_id = $_SESSION['customer_id'];
            $wishlist->insert();
        }
    }

    #[\app\filters\IsCustomer]
    function removeFromWishlist()
    {
        $wishlist = new \app\models\Wishlist();
        if (isset($_POST['id'])) {
            $wishlist->deleteItem($_POST['id'], $_SESSION['customer_id']);
        }
    }

    function displayHearts()
    {
        $wishlist = new \app\models\Wishlist();
        $customer_id = $_SESSION['customer_id'];
        $heartProduct = $wishlist->getAllHearts($customer_id);

    }
    #[\app\filters\IsCustomer]
    function displayWishlist()
    {
        $wishlist = new \app\models\Wishlist();
        $product = new \app\models\Product();
        $wishCont = new \app\controllers\Wishlist();

        $list = $wishlist->getAllHearts($_SESSION['customer_id']);

        foreach ($list as $item) {
            $product_info = $product->getId($item->product_id);
            
            $item->product = $product_info;
        }
        include 'app/views/Wishlist/index.php';
    }
}