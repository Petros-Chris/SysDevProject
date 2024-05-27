<html>

<head>
    <title><?= __('Ticket') ?></title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>
</head>

<body>
    <div class='containerToHoldContainer'>
        <div class='container-infromation'>
            <div class='review-name'><?= $customerInfo->first_name ?>
                <?= $customerInfo->last_name ?>
            </div>
            <dd><?= $customerInfo->email ?></dd>
            <?php if (isset($extraCustomerinfo->address)): ?>
                <dd><?= $extraCustomerinfo->address ?></dd>
            <?php else: ?>
                <dd><?= __('No Address') ?></dd>
            <?php endif; ?>
        </div>
        <div class='container-infromation'>
            <div class='review-name'>
                <h4><?= $ticketInfo->issue ?></h4>
            </div>
            <div class='review-name'>
                <h2><?= $ticketInfo->issue_title ?></h2>
            </div>
            <p style="text-align: left;"><?= $ticketInfo->issue_description ?></p>
        </div>
        <form method="POST" style="width: 50%; text-align: center;">
            <!-- Option: can revert back to ongoing if required -->
            <?php if ($ticketInfo->ticket_status == 1): ?>
                <input type='Submit' value='<?= __('Unresolve It') ?>' name='create_review' id="submitReview2">
            <?php else: ?>
                <input type='Submit' value='<?= __('Mark As Resolved') ?>' name='create_review' id="submitReview1">
            <?php endif; ?>
        </form>
    </div>
</body>

</html>