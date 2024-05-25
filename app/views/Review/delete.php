<html>

<head>
    <title><?= __('Delete Review') ?></title>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<script>
    function generateStarRating(rating) {
        var stars = '';
        for (var i = 1; i <= 5; i++) {
            var starClass = (i <= rating) ? 'filled' : 'empty';
            stars += '<span class="star ' + starClass + '">&#9733;</span>';
        }
        return stars;
    }
</script>

<body>
    <h1><?= __('Delete Review') ?></h1>
    <div class='containerFields'>
        <form method='post' action=''>
            <div class="form-group-for-delete">
                <script>document.write(generateStarRating(<?= $data->rating ?>))</script>
            </div>
            <div class='product-brand-for-delete'>
                <p><?= $data->description ?> </p>
            </div>
            <div class='product-brand-for-delete'><?= $data->timestamp ?></div>

            <input type='Submit' value='<?= __('Delete') ?>' name='create_review' id="submitReviewDelete">
            <a href="/Product/index?id=<?= $_SESSION['product_id'] ?>"><input type='Button' value='<?= __('Back') ?>'
                    name='create_review' id="submitReview2"></a>
        </form>
    </div>
</body>

</html>