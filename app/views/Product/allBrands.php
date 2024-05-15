<html>

<head>
	<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>

    

    <div id="imcool">
        <?php
        foreach ($products as $product): ?>

            <a href='/Product/listing?type=brand&filter=<?= $product->brand ?>'>
                <div class='product-container'>
                    <div class='product-image'>
                        <img src='/app/resources/brands/brand<?= $product->brand ?>.png' alt='<?= $product->brand ?>'>
                    </div>
                    <div class='product-details'>
            </a>
            <div class='product-brand'><?= $product->brand ?></div>
        </div>
        </div>

    <?php endforeach; ?>
    </div>
</body>

</html>