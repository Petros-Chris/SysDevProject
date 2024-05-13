<html>

<head>

</head>

<script>
    function generateStarRating(rating) {
        var stars = '';
        for (var i = 1; i <= 5; i++) {
            var starClass = (i <= rating) ? 'filled' : 'half-Filled';
            stars += '<span class="star ' + starClass + '">&#9733;</span>';
        }
        return stars;
    }

</script>

<body>
    <br>
    <a href='/Review/create'>Make A Review</a> <br>

    <?php
    foreach ($reviews as $review): ?>

        <div class='product-container'>
            <?php if ($ownsReview): ?>
                <?php if ($cus_id == $review->customer_id): ?>
                    <a href="/Review/edit?id=<?= $review->review_id ?>">AAAA PANIC</a>
                <?php endif; ?>
            <?php endif; ?>

            <div class='product-details'>debug: <?= $review->review_id ?></div>
            <div class='product-brand'>User: <?= $review->customer_information->first_name ?>
                <?= $review->customer_information->last_name ?>
            </div>
            <div id='product-star'>
                <script>document.write(generateStarRating(<?= $review->rating ?>))</script></div>
            <div class='product-brand'>Description: <?= $review->description ?></div>
            <div class='product-brand'>Created: <?= $review->timestamp ?></div>

        </div>
        <!-- <a href='../Product/index?id=<<?= $review->product_id ?>'>  <br> -->



    <?php endforeach; ?>
</body>

</html>