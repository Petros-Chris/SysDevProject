<html>

<head>
    <title><?= __('Create A Ticket') ?></title>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
    <div class='containerFields'>
        <form method='post'>
            <h2><?= __('Submit A Ticket') ?></h2>
            <label><?= __('Whats Your Issue Today?') ?> <br><select name="issue" id="orderIssueSelction">
                    <option value="<?= __('Order Issue') ?>"><?= __('Order Issue') ?></option>
                    <option value="<?= __('Product Issue') ?>"><?= __('Product Issue') ?></option>
                </select></label>
            <input type="text" placeholder="<?= __('Title') ?>" id="inputTitle" name="title" required maxlength="50">

            <textarea id="form-description" name="issue_description"
                placeholder="<?= __('Description Of Your Issue') ?>" required maxlength="1500"></textarea> <br>
            <span><?= __('Remaining characters') ?>: <span id='remainingCharacter'>1500</span></span> <br>

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