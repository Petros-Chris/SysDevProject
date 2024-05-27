<!DOCTYPE html>
<html>
<head>
	<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>


<body>
    <?php
    foreach ($allCustOrders as $custOrder): ?>

        <a href="/Admin/order?order_id=<?= $custOrder->order_id ?>&cust_id=<?= $custOrder->customer_id ?>">
            <div class='product-container'>
                <div class='product-details'>debug: <?= $custOrder->order_id ?></div>
                <!-- <div class='product-brand'>User: <?= $custOrder->customer_information->first_name ?>
                <?= $review->customer_information->last_name ?>
            </div> -->
                <!-- <div id='product-star'>
                </div> -->
                <div class='product-brand'>Status: <?= $custOrder->statusText ?></div>
                <div class='product-brand'>Created: <?= $custOrder->timestamp ?></div>

            </div>
        </a>
    <?php endforeach; ?>
</body>

</html>