<html>

<head>
    <title><?= $name ?> view</title>
</head>

<body>
    <div class='product-container'>
        <dt>Customer Name:</dt>
        <dd><?= $customerInfo->first_name ?> <?= $customerInfo->last_name ?></dd>
        <dt>Email:</dt>
        <dd><?= $customerInfo->email ?></dd>
        <dt>Address:</dt>
        <?php if (isset($extraCustomerinfo->address)): ?>
            <dd><?= $extraCustomerinfo->address ?></dd>
        <?php else: ?>
            <dd>User Has No Address</dd>
        <?php endif; ?>
    </div>

    <div class='product-container'>
        <dt>Issue</dt>
        <dd><?= $ticketInfo->issue ?></dd>
        <dt>Description</dt>
        <dd><?= $ticketInfo->issue_description ?></dd>
    </div>
</body>

</html>