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
            <a href='../Ticket/index?id=<?= $ticket->ticket_id ?>'>
                <div class='order-container'>
                    <div class='product-details'>Id: <?= $ticket->ticket_id ?></div>
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