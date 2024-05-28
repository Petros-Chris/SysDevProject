<html>

<head>
    <title><?= __('Create A Message') ?></title>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
    <div class="containerFields">
        <h1 class="h1Titles"><?= __('Create A Message') ?></h1>
        <form method="POST" name="ermwhatthesigma">
            <div id="descriptionBox">
                <textarea type="text" id="form-description" name="message"
                    placeholder="<?= __('What The Message Is About') ?>" maxlength="1500"></textarea> <br>
                <span><?= __('Remaining characters') ?>: <span id='remainingCharacter'>1500</span></span>
            </div>
            <input type="submit" name="action" value="<?= __('Submit') ?>" id="submitReview1" />
            <a href="#" onclick="history.back();"><input type='button' value='<?= __('Cancel') ?>' name='create_review'
                    id="submitReview2"></a>
        </form>
    </div>
</body>
<script>
    characterLimit();
</script>

</html>