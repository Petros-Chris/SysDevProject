<html>
    <head>
<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>
<body>
    <div class='containerToHoldContainer'>
        <h1 class="h1Titles"><?= __('Messages') ?></h1>
        <div class="makeReview">
            <?php if ($canMakeNewMessage): ?>
                <a href="/Ticket/createMessage?ticket_id=<?= $_SESSION['ticket_id'] ?>"><?= __('Add A Message') ?></a>
            <?php endif; ?>
        </div>
        <?php foreach ($messages as $message): ?>
            <div class='review-container'>
                <div class='review-name'><?= $message->user_information->last_name ?>
                    <?= $message->user_information->first_name ?> (<?= $message->user_id ?>)
                </div>
                <div class='product-brand'><?= $message->message ?></div>
                <div class='review-date'><?= $message->timestamp ?></div>
            </div>
        <?php endforeach; ?>
        <?php if (count($messages) == 0): ?>
            <br> <br> <br>
            <h3 class="h1Titles"><?= __('No Messages Found.') ?></h3>
        <?php endif; ?>
    </div>
</body>

</html>