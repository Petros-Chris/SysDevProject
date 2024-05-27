<html>

<head>
    <title><?= $name ?> view</title>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
    <div class='containerFields'>
        <form method='post' action='' id="reviewForm">
            <h1><?= __('Edit Review') ?></h1>
            <div class="form">
                <label id="labelForStar"><?= __('How Much Would You Rate This Product On A Scale Of 1 To 5?') ?>
                </label>
                <div class="rate">
                    <input type="radio" id="star5" name="rating" value="5" checked />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rating" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rating" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rating" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rating" value="1" />
                    <label for="star1" title="text">1 star</label>
                </div>
                </label>
            </div>

            <div id="descriptionBox">
                <textarea type="text" id="form-description" name="description" placeholder="<?= __('Description') ?>"
                    maxlength="500"></textarea> <br>
                <span><?= __('Remaining characters') ?>: <span id='remainingCharacter'>500</span></span>
            </div>
            <input type="hidden" name="timestamp" id="timestamp">

            <input type='Submit' value='<?= __('Update') ?>' name='update_review' id="submitReview1">

            <a href="/Review/delete?id=<?= $data->review_id ?>"><input type='button' value='<?= __('Delete Instead') ?>'
                    name='create_review' id="submitReviewDelete"></a>

            <a href="#" onclick="history.back();"><input type='Submit' value='<?= __('Back') ?>' name='create_review'
                    id="submitReview2"></a>
        </form>
    </div>
</body>

<script>
    characterLimit();
    document.getElementById('reviewForm').addEventListener('submit', function () {
        var currentTimestamp = new Date();
        var formattedTimestamp = currentTimestamp.getFullYear() + '-' +
            ('0' + (currentTimestamp.getMonth() + 1)).slice(-2) + '-' +
            ('0' + currentTimestamp.getDate()).slice(-2) + ' ' +
            ('0' + currentTimestamp.getHours()).slice(-2) + ':' +
            ('0' + currentTimestamp.getMinutes()).slice(-2) + ':' +
            ('0' + currentTimestamp.getSeconds()).slice(-2);
        document.getElementById('timestamp').value = formattedTimestamp;
    });
</script>

</html>