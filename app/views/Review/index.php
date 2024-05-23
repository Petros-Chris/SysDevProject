<html>

<head>

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

    document.addEventListener('DOMContentLoaded', function () {
        var starElements = document.querySelectorAll('.star');
        starElements.forEach(function (star) {
            star.addEventListener('click', function () {
                var rating = parseInt(document.getElementById('starRating').innerText);
                // Handle the click event, for example, you can log the rating to the console
                console.log('Clicked rating:', rating);
                // You can also perform any other actions you want, such as sending the rating to the server
            });
        });
    });
</script>

<body>
    <br>


    <div class='containerToHoldContainer'>
        <div class="makeReview">
            <?php if ($canMakeNewReview): ?>
                <a href='/Review/create'><?= __('Make A Review') ?></a> <br>
            <?php endif; ?>
        </div>
        <?php

        foreach ($reviews as $review): ?>

            <div class='review-container'>
                <div class='review-name'><?= $review->customer_information->first_name ?>
                    <?= $review->customer_information->last_name ?>
                </div>
                <div id='product-star'>
                    <script>document.write(generateStarRating(<?= $review->rating ?>))</script></div>
                <div class='product-brand'>
                    <p><?= $review->description ?> </p>
                </div>
                <div class='review-date'><?= $review->timestamp ?></div>
                <?php if ($ownsReview): ?>
                    <?php if ($cus_id == $review->customer_id): ?>
                        <a href="/Review/edit?id=<?= $review->review_id ?>"><?= __('Edit') ?></a>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if (!$canMakeNewReview): ?>
                    <a href="/Product/index?id=<?= $review->product_id ?>"><?= __('Go To Product') ?></a>
                <?php endif; ?>

            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>