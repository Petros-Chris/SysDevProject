<?php
ob_start();
require ('app/core/App.php');
require ('app/core/Controller.php');
require ('app/core/autoload.php');
session_start();
require_once ('vendor/autoload.php');
require ('app/core/i18n.php');
require_once ('app/views/nav.php');
require_once ('app/views/Wishlist/index.php');
require_once ('app/views/Cart/index.php');

//To have the cart and wishlist be able to be displayed on all pages
$cart = new \app\controllers\Cart();
$cart->viewCart();
if (isset($_SESSION['customer_id'])) {
    $wishlist = new \app\controllers\Wishlist();
    $wishlist->displayWishlist();
}