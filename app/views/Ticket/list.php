<html>

<head>
<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
    <h1><?= __('All Tickets') ?></h1>
    <div class='containerToHoldContainer'>
        <?php
        foreach ($tickets as $ticket): ?>
            <a href='../Ticket/indexEmployee?id=<?= $ticket->ticket_id ?>'>
                <div class='order-container'>

                    <div class='product-details'>Id: <?= $ticket->ticket_id ?></div>
                    <div class='review-name'> <?= $ticket->customer_information->first_name ?>
                        <?= $ticket->customer_information->last_name ?>
                    </div>
                    <?php if (isset($ticket->extra_customer_information->address)): ?>
                        <dd><?= $ticket->extra_customer_information->address ?></dd>
                    <?php else: ?>
                        <dd><?= ('No Address') ?></dd>
                    <?php endif; ?>
                    <div class='product-details'><?= $ticket->issue ?></div>
                    <div class='product-details'><?= $ticket->issue_title ?></div>
                    <div class='product-brand'>Status: <?= $ticket->ticket_status_text ?></div>
                    <div class='product-details'>
                        <p><?= $ticket->timestamp ?></p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</body>

</html>