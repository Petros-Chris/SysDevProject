<?php

namespace app\controllers;

use stdClass;

class Product extends \app\core\Controller
{
    function listings()
    {
        $product = new \app\models\Product();
        $wishlist = new \app\models\Wishlist();
        $review = new \app\models\Review();

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

        //To Get The Average Of All Reviews For A Product
        foreach ($products as $product) {
            $reviews = $review->getAllFromProduct($product->product_id);
            $counter = 0;
            $ratingTotalForProduct = 0;
            foreach ($reviews as $review) {
                $ratingTotalForProduct += $review->rating;
                $counter++;
            }
            //Error Handling
            if ($ratingTotalForProduct == 0) {
                $product->rating = 0;
            } else {
                $product->rating = ($ratingTotalForProduct / $counter);
            }
            $product->how_many_reviews = $counter;
        }
        include 'app/views/Product/listing.php';
        include 'app/views/footer.php';
    }

    function description()
    {
        $product = new \app\models\Product();
        $review = new \app\models\Review();

        $item = $product->getId($_GET['id']);
        $reviews = $review->getAllFromProduct($_GET['id']);

        $counter = 0;
        $ratingTotalForProduct = 0;

        foreach ($reviews as $review) {
            $ratingTotalForProduct += $review->rating;
            $counter++;
        }
        if ($ratingTotalForProduct == 0) {
            $product->rating = 0;
        } else {
            $product->rating = ($ratingTotalForProduct / $counter);
        }
        $product->how_many_reviews = $counter;

        $_SESSION['product_id'] = $_GET['id'];

        $re = new \app\controllers\Review();

        include 'app/views/Product/index.php';
        $re->displayReview();
    }

    public function search()
    {
        $product = new \app\models\Product();
        $wishlist = new \app\models\Wishlist();
        $review = new \app\models\Review();

        $products = $product->getMultiFilter('color', 'brand', 'shape', 'description', 'optical_sun', 'model', $_GET['search']);

        //To Get The Average Of All Reviews For A Product
        foreach ($products as $product) {
            $reviews = $review->getAllFromProduct($product->product_id);
            $counter = 0;
            $ratingTotalForProduct = 0;
            foreach ($reviews as $review) {
                $ratingTotalForProduct += $review->rating;
                $counter++;
            }
            //Error Handling
            if ($ratingTotalForProduct == 0) {
                $product->rating = 0;
            } else {
                $product->rating = ($ratingTotalForProduct / $counter);
            }
            $product->how_many_reviews = $counter;
        }

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