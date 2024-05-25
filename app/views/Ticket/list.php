<html>

<head>

</head>

<body>
    <?php
    foreach ($tickets as $ticket): ?>

        <div class='product-container'>

            <a href='../Ticket/indexEmployee?id=<?= $ticket->ticket_id ?>'>

                <!-- Check if user exists -->
                <?php if (isset($ticket->customer_information->customer_id)): ?>
                    <div class='product-details'>Id: <?= $ticket->ticket_id ?></div>
                    <div class='product-brand'>User: <?= $ticket->customer_information->first_name ?>
                        <?= $ticket->customer_information->last_name ?>
                    </div>
                    <!-- //Check if address exists -->
                    <?php if (isset($extraCustomerinfo->address)): ?>
                        <dd><?= $extraCustomerinfo->address ?></dd>
                    <?php else: ?>
                        <dd>User Has No Address</dd>
                    <?php endif; ?>
                <?php else: ?>
                    <div class='product-details'>User Has Been Deleted</div>
                <?php endif; ?>

                <div class='product-details'>The Issue: <?= $ticket->issue ?></div>
                <div class='product-brand'>Status: <?= $ticket->ticket_status_text ?></div>
            </a>
        </div>

        </div>
    <?php endforeach; ?>   
</body>

</html>