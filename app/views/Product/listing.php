<?php
$name = '';


if (!empty($products)) {


    $firstProduct = $products[0];
    $name = $firstProduct->brand;
}
?>

<!DOCTYPE html>
<html>


<head>
    <title><?= $name ?> view</title>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>


<body>
    <?php
    $currentUrl = $_SERVER['REQUEST_URI'];
    if ($currentUrl === '/Product/listing') {
        ?>
        <h1>All of our products</h1>
    <?php } else {
        if (strpos($currentUrl, 'type=optical_sun')) {
            if (strpos($currentUrl, 'filter=Optical')) {
                ?>
                <h1>All of our optical glasses</h1>
            <?php } elseif (strpos($currentUrl, 'filter=Sun')) { ?>
                <h1>All of our sunglasses</h1>
            <?php }
        } else {
            ?>
            <h1><?= $name ?></h1>
            <p class="brand-description">Find personalized glasses with unique designs</p>
        <?php }
    } ?>

    <!-- New product filters section -->
    <div class="product-filters">
        <ul class="mobile-product-filters vertical menu show-for-small-only" data-accordion-menu>
            <li>
            <li class="product-filters-tab">
                <h2>Price</h2>
                <a href="" class="clear-all" onclick="clearCheckboxes()">Clear All</a>
                <ul class="categories-menu menu vertical nested">
                    <li><label for="price-checkbox1">Under $300<input class="price-checkbox" type="checkbox"
                                value="0-300"></label></li>
                    <li><label for="price-checkbox2">$310–$500<input class="price-checkbox" type="checkbox"
                                value="310-500"></label></li>
                    <li><label for="price-checkbox3">$510–$700<input class="price-checkbox" type="checkbox"
                                value="510-700"></label></li>
                    <li><label for="price-checkbox4">$710–$1,000<input class="price-checkbox" type="checkbox"
                                value="710-1000"></label></li>
                    <li><label for="price-checkbox5">$1,100 +<input class="price-checkbox" type="checkbox"
                                value="1100+"></label></li>
                </ul>
            </li>
            </li>
        </ul>
    </div>
    <!-- End of new product filters section -->




    <div id="imcool">
        <?php foreach ($products as $product): ?>
            <div class='product-container' data-price="<?= $product->sell_price ?>">
                <a id="productLink" href='../Product/index?id=<?= $product->product_id ?>'>
                    <div class='product-image'>
                        <img src='/app/resources/images/product_<?= $product->product_id ?>.png'
                            alt='<?= $product->description ?>' style='width: 100%; height: 150px;'>
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
                        <span id='heart-icon-<?= $product->product_id ?>'
                            class='heart-icon <?= $isWishlisted ? 'clicked' : '' ?>'
                            onclick='toggleHeartAjax(this, <?= $product->product_id ?>)'>&#x2661;</span>
                    <?php endif; ?>

                    <div class='product-brand'><?= $product->brand ?></div>
                    <div class='product-price'>$<?= $product->sell_price ?></div>
                    <script>document.write(generateStarRating(<?= $product->rating ?>))</script>
                    (<?= $product->how_many_reviews ?>)
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
        document.addEventListener('DOMContentLoaded', function () {
            var checkboxes = document.querySelectorAll('.price-checkbox');

            checkboxes.forEach(function (checkbox) {
                checkbox.addEventListener('change', function () {
                    var products = document.querySelectorAll('.product-container');

                    products.forEach(function (product) {
                        var price = parseInt(product.getAttribute('data-price'));
                        var isVisible = false;

                        checkboxes.forEach(function (cb) {
                            var cbValue = cb.value;
                            if (cb.checked) {
                                var range = cbValue.split('-');
                                var minPrice = parseInt(range[0]);
                                var maxPrice = parseInt(range[1]);

                                if (cbValue === '1100+') {
                                    if (price >= 1100) { // If price is greater than or equal to 1100, make it visible
                                        isVisible = true;
                                    }
                                } else {
                                    if (price >= minPrice && price <= maxPrice) { // If price is within the range, make it visible
                                        isVisible = true;
                                    }
                                }
                            }
                        });

                        if (isVisible) {
                            product.style.display = 'block';
                        } else {
                            product.style.display = 'none';
                        }
                    });
                });
            });
        });

        function clearCheckboxes() {
            var checkboxes = document.querySelectorAll('.price-checkbox');
            checkboxes.forEach(function (checkbox) {
                checkbox.checked = false;
            });

            var products = document.querySelectorAll('.product-container');
            products.forEach(function (product) {
                product.style.display = 'block';
            });
        }
    </script>

</body>

</html>