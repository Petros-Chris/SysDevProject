<html>

<head>
    <title><?= __('Setup 2 Factor Authentication') ?></title>
</head>

<body>
    <div class='containerToHoldContainer'>
        <h3><?= __('Scan This Qr Code With Your Authenticator App To Get The Six Digit Code') ?></h3>
        <img height=300 width=300 src="<?= $QRCode ?>">
        <form method="post" style="text-align: center;">
            <input type="text" name="totp" id="totp" maxlength="6" placeholder="Enter Six Digit Code Here" />
            <input type="submit" name="action" value="Verify code" id="submitReview1" style="margin: 15px;" />
        </form>
        <?php if (isset($_SESSION['error_message'])): ?>
            <p style="color: red;"><?= __("The Code You Provided Didn't Work, Rescan The Qr Code And Try Again.") ?></p>
            <?php unset($_SESSION['error_message']); ?>
        <?php endif; ?>
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