<html>

<body>
    <div id='popup' class='popup'></div>
</body>

</html>
<script>
    var price = 0

    <?php if (isset($cart)): ?>
        <?php foreach ($cart as $product): ?>      

            var pro_id = <?= json_encode($product->product_id) ?>;
            var pro_shape = <?= json_encode($product->shape) ?>;
            var pro_price = <?= json_encode($product->cost_price) ?>;
            var amount_bought = <?= json_encode($product->quantity) ?>;
            var price_of_specific_items = parseFloat(pro_price) * amount_bought;
            price += price_of_specific_items;

            document.getElementById('popup').innerHTML +=
                '<a href="/Product/index?id=' + pro_id + '">' + pro_shape + ' ' + amount_bought + ' ' + price_of_specific_items + '</a>' +
                '<span onclick="removeProductFromCart(' + pro_id + ')">&#128465;</span><br>';
        <?php endforeach; ?>
        document.getElementById('popup').innerHTML +=
            'Total:' + price + '<br> <button id=checkoutBtn onclick=\"window.location.href=\'/Customer/checkout\'\">Proceed</button>';
    <?php else: ?>
        document.getElementById('popup').innerHTML += '<p> Cart Is Empty! </p>';
    <?php endif; ?>
    document.getElementById('popup').innerHTML += '<button onclick=hidePopup()>Close</button>';
</script>