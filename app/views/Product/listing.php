<!DOCTYPE html>
<html>

<head>
    <title><?= $name ?> view</title>
    <link rel="stylesheet" type="text/css" href="/app/style.scss">
</head>
<body>


    <div id="imcool">
        <?php foreach ($products as $product): ?>
            <a id="productLink" href='../Product/index?id=<?= $product->product_id ?>'>
                <div class='product-container'>
                    <div class='product-image'> 
                        <img src='/app/resources/images/product_<?= $product->product_id ?>.png' alt='<?= $product->description ?>'>
                    </div>
            </a>
            <div class='product-details'>
                <?php
                $isWishlisted = false;
                foreach ($wishlistItems as $item) {
                    if ($item->product_id == $product->product_id) {
                        $isWishlisted = true;
                        break;
                    }
                }
                ?>
                <?php if (isset($_SESSION['customer_id'])): ?>
                    <span id='heart-icon-<?= $product->product_id ?>' class='heart-icon <?= $isWishlisted ? 'clicked' : '' ?>'
                        onclick='toggleHeartAjax(this, <?= $product->product_id ?>)'>&#x2661;</span>
                <?php endif; ?>

                <div class='product-brand'><?= $product->brand ?></div>
                <div class='product-price'>$<?= $product->cost_price ?></div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>

    <script>
        function toggleHeartAjax(icon, product_id) {
            icon.classList.toggle('clicked');
            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log('Wishlist changed:', product_id);
                    } else {
                        console.error('Failed to change wishlist:', xhr.responseText);
                        icon.classList.toggle('clicked');
                    }
                }
            };

            var method = icon.classList.contains('clicked') ? 'add' : 'remove';
            xhr.open('POST', '/Wishlist/' + method);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('id=' + product_id);
        }
    </script>
</body>

</html>