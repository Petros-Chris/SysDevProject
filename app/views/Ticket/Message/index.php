<html>

<head>
    <style>
        /* Can remove this when real ui starts to exist 🙏 
    Is only there so it goes down not side*/
        .product-container {
            display: block;
            width: 300px
        }
    </style>
</head>

<body>
    <?php
    foreach ($messages as $message): ?>

        <div class='product-container'>

            <!-- <div class='product-details'>debug: <?= $message->message_id ?></div> -->
            <div class='product-brand'>User: <?= $message->user_id ?>
                <!-- <?= $review->customer_information->last_name ?> -->
            </div>
            <div class='product-brand'>Message: <?= $message->message ?></div>
            <div class='product-brand'>Created: <?= $message->timestamp ?></div>

        </div>
    <?php endforeach; ?>
</body>

</html>