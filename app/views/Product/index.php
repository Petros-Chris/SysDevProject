<!DOCTYPE html>
<html>

<head>
    <title><?= $item->brand ?></title>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">

</head>

<body>
    <img src="/app/resources/images/product_<?= $item->product_id ?>.png" alt="<?= $item->description ?>"
        class="glasses">
        <div class="containers">
    <dl class="big-words">
        <dt><?= __('Brand:') ?></dt>
        <dd><?= $item->brand ?></dd>
        <dt><?= __('Shape:') ?></dt>
        <dd><?= $item->shape ?></dd>
        <dt><?= __('Description:') ?></dt>
        <dd><?= $item->description ?></dd>
        <script>document.write(generateStarRating(<?= $product->rating ?>))</script>
        (<?= $product->how_many_reviews ?>)
        <dt><?= __('Color:') ?></dt>
        <dd><?= $item->color ?></dd>
        <dt><?= __('Cost Price:') ?></dt>
        <dd><?= $item->sell_price ?></dd>
        <dt><?= __('Size:') ?></dt>
        <dd><?= $item->size ?></dd>
        <dt><?= __('Left In Stock:') ?></dt>
        <dd><?= $item->quantity ?></dd>
    </dl>




        <select id="quantitySeleted">
            <?php
            for ($num = 1; $num <= $item->quantity; $num++): ?>
                <option value="<?= $num ?>"><?= $num ?></option>
            <?php endfor; ?>
        </select>
        <input id="cartBtn" type='button' value='Add To Cart' style='background-color: blue; color: white;'
            onclick="addProduct(<?= $item->product_id ?>, document.getElementById('quantitySeleted').value)">
    </div>
</body>

</html>