<!DOCTYPE html>
<html>

<head>
    <title><?= $name ?> view</title>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
    <div id='popup' class='popup'></div>
    <div class="container">
        <img src="/app/resources/images/product_<?= $data->product_id ?>.png" alt="<?= $data->description ?>" style="width: 200px; height: auto;">
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
        </dl>
    </div>

    <input id="cartBtn" type='button' value='Add To Cart' onclick="addProduct(<?= $data->product_id ?>)">
</body>

<script>
    function addProduct(product_id) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log('Product added to cart:', product_id);
                    location.reload();
                } else {
                    console.error('Failed to add product to cart:', xhr.responseText);
                }
            }
        };
        xhr.open('POST', '/Cart/addCart');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('id=' + product_id);
    }

    function viewCart() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    document.getElementById('popup').innerHTML = xhr.responseText;
                    console.log("Cart displayed");

                    document.getElementById('popup').style.display = 'block';

                    setTimeout(hidePopup, 3000);
                } else {
                    console.error('Failed to display cart', xhr.responseText);
                }
            }
        };
        xhr.open('GET', '/Cart/view');
        xhr.send();
    }

    function hidePopup() {
        document.getElementById('popup').style.display = 'none';
    }
</script>

</html>
