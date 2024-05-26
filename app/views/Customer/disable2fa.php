<html>

<head>
    <title><?= __('Disable Authenticator') ?></title>
</head>

<body>
    <div class='containerToHoldContainer'>
        <h3><?= __('Are You Sure You Want To Disable 2 Factor Authentication') ?>?</h3>
        <form method='post' style="text-align: center;">
            <input type="password" name="password" placeholder="Enter Your Password Here" />

            <input type="submit" name="action" value="Deactivate" id="submitReviewDelete" style="margin: 15px;" />
            <a href="#" onclick="history.back();"><input type='Submit' value='<?= __('Back') ?>' name='create_review'
                    id="submitReview2"></a>
        </form>
        <?php if (isset($_SESSION['error_message'])): ?>
            <p style="color: red;"><?= __("Your Password Is Incorrect") ?></p>
            <?php unset($_SESSION['error_message']); ?>
        <?php endif; ?>
    </div>
</body>

</html>