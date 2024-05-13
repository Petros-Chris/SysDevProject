<html>

<head>
    <title><?= $name ?> view</title>
    <link rel="stylesheet" type="text/css" href="/app/style.css">
</head>

<body>

<form action="/Product/search" method="GET">
        <label for="search">Search:</label>
        <input type="text" id="search" name="search" placeholder='eg: Black'>
        <button type="submit">Search</button>
    </form>

    <div id="imcool">
        <?php foreach ($products as $product): ?>

            <a href='../Product/index?id=<?= $product->product_id ?>'>
                <div class='product-container'>
                    <div class='product-image'>
                        <img src='/app/resources/questionMark.png' alt='<?= $product->description ?>'>
                    </div>
                    <div class='product-details'>
            </a>
            <span class='heart-icon' onclick='toggleHeart(this, <?= $product->product_id ?>)'>&#x2661;</span>
            <div class='product-brand'><?= $product->brand ?></div>
            <div class='product-price'>$<?= $product->cost_price ?></div>
        </div>
        </div>


    <?php endforeach; ?>
</div>
</body>

</html>

<script>
    function toggleHeart(icon, $product_id) {
        icon.classList.toggle('clicked');
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log('Product added to wishlist:', $product_id);
                } else {
                    console.error('Failed to add product to wishlist:', xhr.responseText);
                }
            }
        };
        var method = icon.classList.contains('clicked') ? 'add' : 'remove';
        xhr.open('POST', '/Wishlist/' + method);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('id=' + $product_id);
    }
</script>