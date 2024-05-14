<html>

<head>

</head>

<body>
    <h1>Customer:</h1>
    <dt>First Name:</dt>
    <dd><?= $customerInfo->first_name ?></dd>
    <dt>Last Name:</dt>
    <dd><?= $customerInfo->last_name ?></dd>
    <dt>Email:</dt>
    <dd><?= $customerInfo->email ?></dd>
    <dt>Address:</dt>
    <dd><?= $extraCustomerInfo->address ?></dd>
    <h1>Products Ordered:</h1>
    <?php

    foreach ($orderInfomation as $orderInfo): ?>

        <div class='product-container'>
            <div class='product-details'>Debug: <?= $orderInfo->order_id ?></div>
            <div class='product-details'>Bought: <?= $orderInfo->quantity ?></div>
            <div class='product-details'>Cost: <?= $orderInfo->price ?></div>
            <div class='product-details'>id: <?= $orderInfo->product_id ?></div>
            <div class='product-details'>Model: <?= $orderInfo->product_information->model ?></div>
            <div class='product-details'>Color: <?= $orderInfo->product_information->color ?></div>
            <div class='product-details'>Size: <?= $orderInfo->product_information->size ?></div>
            <div class='product-details'>Type: <?= $orderInfo->product_information->optical_sun ?></div>
            <div class='product-details'>status: <?= $orderInfo->statusText ?></div>
        </div>

    <?php endforeach; ?>
</body>

</html>