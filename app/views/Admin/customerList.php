<html>

<head>
	<title><?= $name ?> view</title>

</head>

<body>
	<?php
	foreach ($customers as $customer): ?>
		<div class='product-container'>
			<a href="<?= $customer->disable == 0 ? "/Admin/disableCustomer?id={$customer->customer_id}" :
				"/Admin/enableCustomer?id={$customer->customer_id}" ?>">
				<div class='product-details'>debug: <?= $customer->customer_id ?></div>
				<div class='product-brand'>User: <?= $customer->last_name ?> 	<?= $customer->first_name ?> (<?= $customer->customer_id?>) </div>
				<div class='product-brand'>Status: <?= $customer->disable_text ?></div>
			</a>
		</div>
	<?php endforeach; ?>
</body>

</html>