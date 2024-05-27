<html>

<head>
	<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
    <h1>All Orders</h1>

    <div class='containerToHoldContainer'>
    <form action="" method="GET" class='searchBtn'>
        <input type="text" id="search" name="search">
        <button type="submit"><?= __('Search') ?></button>
    </form>
        <?php
        foreach ($allCustOrders as $custOrder): ?>
            <a href="/Admin/order?order_id=<?= $custOrder->order_id ?>&cust_id=<?= $custOrder->customer_id ?>">
                <div class='order-container'>
                    <div class='product-details'><?= __('Order Number') ?>: <?= $custOrder->order_id ?></div>
                    <div class='product-details'><?= __('Placed On') ?>: <?= $custOrder->timestamp ?></div>
                    <div class='product-details'><?= __('Products Ordered') ?>: <?= $custOrder->items_bought_each_order ?>
                    </div>
                    <div class='product-details'><?= __('Amount Paid') ?>: <?= $custOrder->total ?>$</div>
                    <div class='product-details'><?= __('Shipped To') ?>: <?= $custOrder->address ?></div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</body>

</html>