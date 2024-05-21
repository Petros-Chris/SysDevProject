<!DOCTYPE html>
<html>

<head>
    <title><?= $name ?> view</title>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">

</head>

<body>
    <div id='popup' class='popup'></div>
    <img src="/app/resources/images/product_<?= $data->product_id ?>.png" alt="<?= $data->description ?>"
        style="width: 40%; height: 40%;" class="glasses">
    <div class="containers">

        <dl>
            <dt><?= __('Brand:') ?></dt>
            <dd><?= $data->brand ?></dd>
            <dt><?= __('Description:') ?></dt>
            <dd><?= $data->description ?></dd>
            <dt><?= __('Size:') ?></dt>
            <dd><?= $data->size ?></dd>
            <dt><?= __('Shape:') ?></dt>
            <dd><?= $data->shape ?></dd>
            <dt><?= __('Color:') ?></dt>
            <dd><?= $data->color ?></dd>
            <dt><?= __('Cost Price:') ?></dt>
            <dd><?= $data->cost_price ?></dd>
            <dt><?= __('Left In Stock:') ?></dt>
            <dd><?= $data->quantity ?></dd>
        </dl>

        <select>
            <?php
            for ($num = 1; $num <= $data->quantity; $num++): ?>
                <option value="<?= $num ?>"><?= $num ?></option>

            <?php endfor; ?>


        </select>
        <input id="cartBtn" type='button' value='Add To Cart' onclick="addProduct(<?= $data->product_id ?>)">
    </div>
</body>

</html>