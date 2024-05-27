<html>

<head>
    <title><?= $name ?> view</title>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
    <br>
    <div class='containerToHoldContainers'>
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
                    |
                    <a href="/Product/index?id=<?= $review->product_id ?>"><?= __('Go To Product') ?></a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>