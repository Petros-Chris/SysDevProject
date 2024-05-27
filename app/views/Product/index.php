<!DOCTYPE html>
<html>

<head>
    <title><?= $item->brand ?></title>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">

</head>

<body>
    <img src="/app/resources/images/product_<?= $item->product_id ?>.png" alt="<?= $item->description ?>"
        style="width: 340px; height: 150px;" class="glasses">
    <div class="containers">

        <dl>
            <dt><?= __('Brand:') ?></dt>
            <dd><?= $item->brand ?></dd>
            <dt><?= __('Description:') ?></dt>
            <dd><?= $item->description ?></dd>
            <dt><?= __('Size:') ?></dt>
            <dd><?= $item->size ?></dd>
            <dt><?= __('Shape:') ?></dt>
            <dd><?= $item->shape ?></dd>
            <dt><?= __('Color:') ?></dt>
            <dd><?= $item->color ?></dd>
            <dt><?= __('Cost Price:') ?></dt>
            <dd><?= $item->sell_price ?></dd>
            <dt><?= __('Left In Stock:') ?></dt>
            <dd><?= $item->quantity ?></dd>
            <script>document.write(generateStarRating(<?= $product->rating ?>))</script>
            (<?= $product->how_many_reviews ?>)
        </dl>

        <select id="quantitySeleted">
            <?php
            for ($num = 1; $num <= $item->quantity; $num++): ?>
                <option value="<?= $num ?>"><?= $num ?></option>

            <?php endfor; ?>
        </select>
        <input id="cartBtn" type='button' value='Add To Cart'
            onclick="addProduct(<?= $item->product_id ?>, document.getElementById('quantitySeleted').value)">
    </div>
</body>

</html>