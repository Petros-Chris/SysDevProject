<!DOCTYPE html>
<html>
<head>
	<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
	<h1> User Accounts</h1>
	<?php
	foreach ($customers as $customer): ?>
		<div class='product-container'>
			<a href="<?= $customer->disable == 0 ? "/Admin/disableCustomer?id={$customer->customer_id}" :
				"/Admin/enableCustomer?id={$customer->customer_id}" ?>">
				<div class='product-details'><?= __('debug') ?>: <?= $customer->customer_id ?></div>
				<div class='product-brand'><?= __('User') ?>: <?= $customer->last_name ?> 	<?= $customer->first_name ?>
					(<?= $customer->customer_id ?>) </div>
				<div class='product-brand'><?= __('Status') ?>: <?= $customer->disable_text ?></div>
			</a>
		</div>
	<?php endforeach; ?>
</body>

</html>