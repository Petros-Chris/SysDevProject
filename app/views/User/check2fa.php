<html>

<head>
    <title><?= __('Authenticate') ?></title>
</head>

<body>
    <div class='containerToHoldContainer'>
        <p><?= __('Write the 6-digit code provided by your authenticator app') ?>.</p>
        <form method="post" style="text-align: center;">
            <input type="text" name="totp" id="totp" maxlength="6" placeholder="<?= __('Write It Here') ?>" />
            <?php if (isset($_SESSION['error_message'])): ?>
                <p style="color: red;"><?= __("The Code You Provided Didn't Work") ?></p>
                <?php unset($_SESSION['error_message']); ?>
            <?php endif; ?>
            <input type="submit" name="action" value="Verify" id="submitReview1" style="margin: 15px;" />
            <a href="#" onclick="history.back();"><input type='Submit' value='<?= __('Back') ?>' name='create_review'
                    id="submitReview2"></a>
        </form>
    </div>
</body>

<script>
    document.getElementById('totp').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            //form is submitted by default
        } else if (!/[0-9]/.test(e.key)) {
            e.preventDefault();
        }
    });
</script>


</html>