<?php
$name = '';

// Assuming $products is an array of products with each product having a 'brand' property
if (!empty($products)) {
    // Get the brand of the first product
    $firstProduct = $products[0]; // Assuming products array is not empty
    $name = $firstProduct->brand; // Set $name to the brand of the first product
}
?>

<!DOCTYPE html>
<html>

<head>
    <title><?= $name ?> view</title>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
    <style>
        .brand-description {
            margin-left: 20px; /* Adjust the margin-left as needed */
        }
    </style>
</head>

<body>
    <?php
    // Check if the current URL exactly matches /Product/listing
    $currentUrl = $_SERVER['REQUEST_URI'];
    if ($currentUrl === '/Product/listing') {
    ?>
        <h1>All of our products</h1>
    <?php } else {
        // Check if the current URL contains specific parameters indicating optical or sunglasses
        if (strpos($currentUrl, 'type=optical_sun')) {
            if (strpos($currentUrl, 'filter=Optical')) {
                ?>
                <h1>All of our optical glasses</h1>
            <?php } elseif (strpos($currentUrl, 'filter=Sun')) { ?>
                <h1>All of our sunglasses</h1>
            <?php }
        } else {
            // Check if the current URL doesn't contain specific parameters indicating the listing page
            ?>
            <h1><?= $name ?></h1>
            <p class="brand-description">Find personalized glasses with unique designs</p>
    <?php }
    } ?>

    <div id="imcool">
        <?php foreach ($products as $product): ?>
            <a id="productLink" href='../Product/index?id=<?= $product->product_id ?>'>
                <div class='product-container'>
                    <div class='product-image'>
                        <img src='/app/resources/images/product_<?= $product->product_id ?>.png'
                            alt='<?= $product->description ?>' style='width: 100%; height: 100%;'>
                    </div>
            </a>
            <div class='product-details'>
                <?php if (isset($wishlistItems)): ?>
                    <?php
                    $isWishlisted = false;
                    foreach ($wishlistItems as $item) {
                        if ($item->product_id == $product->product_id) {
                            $isWishlisted = true;
                            break;
                        }
                    }
                    ?>
                <?php endif; ?>
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
