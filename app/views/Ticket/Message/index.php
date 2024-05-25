<html>

<body>
    <div class='containerToHoldContainer'>
        <h1 class="h1Titles">Messages</h1>
        <div class="makeReview">
            <?php if ($canMakeNewMessage): ?>
                <a href="/Ticket/createMessage?ticket_id=<?= $_SESSION['ticket_id'] ?>">Add A Message</a>
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
    </div>
</body>

</html>