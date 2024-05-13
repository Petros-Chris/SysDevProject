<?php

namespace app\controllers;

use stdClass;

class Review extends \app\core\Controller
{
    #[\app\filters\IsCustomer]
    function update()
    {
        $review = new \app\models\Review();
        $specificReview = $review->get($_GET['id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $specificReview->rating = $_POST['rating'];
            $specificReview->description = $_POST['description'];
            $specificReview->image_link = $_POST['image_link'];

            $specificReview->update();
            header('location:/Review/index');
        } else {
            $this->view('Review/edit', $specificReview);
        }
    }

    #[\app\filters\IsCustomer]
    function create()
    {
        $pro_id = $_SESSION['product_id'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $review = new \app\models\Review();

            $review->product_id = $pro_id;
            $review->customer_id = $_SESSION['customer_id'];
            $review->rating = $_POST['rating'];
            $review->description = $_POST['description'];
            $review->image_link = $_POST['image_link'];

            $review->insert();

            header("location:/Product/index?id=$pro_id");
        } else {
            $this->view('Review/create');
        }
    }

    function displayReview()
    {
        $review = new \app\models\Review();
        $customer = new \app\models\Customer();

        $reviews = $review->getAllFromProduct($_GET['id']);

        //This adds the customer information into the review
        foreach ($reviews as $review) {
            $customerInfo = $customer->getById($review->customer_id);
            $review->customer_information = $customerInfo;
        }
        $ownsReview = isset($_SESSION['customer_id']);
        $cus_id = 0;
        if ($ownsReview) {
            $cus_id = $_SESSION['customer_id'];
        }

        include 'app/views/Review/index.php';
        include 'app/views/footer.php';
    }
}