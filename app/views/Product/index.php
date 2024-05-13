<html>

<head>
    <title><?= $name ?> view</title>
</head>

<body>

    <div id='popup' class='popup'>
    </div>

    <dt>
    <dd><?= $data->brand ?></dd>
    </dt>
    <dt>
    <dd><?= $data->model ?></dd>
    </dt>
    <dt>
    <dd><?= $data->color ?></dd>
    </dt>
    <dt>
    <dd><?= $data->cost_price ?></dd>
    </dt>
    <dt>
    <dd><?= $data->shape ?></dd>
    </dt>
    <dt>
    <dd><?= $data->size ?></dd>
    </dt>
    <dt>
    <dd><?= $data->optical_sun ?></dd>
    </dt>
    <dt>
    <dd><?= $data->description ?></dd>
    </dt>
    <dt>
    <dd><?= $data->quantity ?></dd>
    </dt>

    <!-- <img src='<?= $data->image ?>'> -->

    <input type='button' value='Add To Cart' onclick="addProduct(<?= $data->product_id ?>)">

</body>

</html>

<script>
    function addProduct($product_id) {
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log('Product added to cart:', $product_id);

                    viewCart();
                } else {
                    console.error('Failed to add product to cart:', xhr.responseText);
                }
            }
        };
        xhr.open('POST', '/Product/addCart');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('id=' + $product_id);


    }

    function viewCart() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Assuming the server sends back the full cart HTML
                    document.getElementById('popup').innerHTML = xhr.responseText;
                    console.log("cart displayed");
                } else {
                    console.error('Failed to display cart', xhr.responseText);
                }
            }
        };
        xhr.open('GET', 'Product/view'); // Make sure to provide the correct path
        xhr.send();
    }
</script>