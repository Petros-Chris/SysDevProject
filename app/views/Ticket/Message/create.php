<html>

<head>
    <title><?= __('Create A Message') ?></title>
</head>

<body>
    <div class="container">
        <h1><?= __('Create Message') ?></h1>
        <form method="POST" name="ermwhatthesigma">
            <div id="descriptionBox">
                <textarea type="text" id="form-description" name="description" placeholder="<?= __('Description') ?>"
                    maxlength="500"></textarea> <br>
                <span><?= __('Remaining characters') ?>: <span id='remainingCharacter'>500</span></span>
            </div>
            <label><?= __('Image Link') ?>:<input type="text" name="image_link"></label><br>
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