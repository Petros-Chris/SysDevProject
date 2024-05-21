<script>
    var price = 0
    <?php foreach ($cart as $product): ?>      

        var pro_id = <?= json_encode($product->product_id) ?>;
        var pro_shape = <?= json_encode($product->shape) ?>;
        var pro_price = <?= json_encode($product->cost_price) ?>;
        price += parseFloat(pro_price);

        document.getElementById('popup').innerHTML +=
            '<a href="/Product/index?id=' + pro_id + '">' + pro_shape + ' ' + pro_price + '</a>' +
            '<span onclick="removeProductFromCart(' + pro_id + ')">&#128465;</span><br>';
    <?php endforeach; ?>


    document.getElementById('popup').innerHTML +=
        'Total:' + price + '<br> <button id=checkoutBtn onclick=\"window.location.href=\'/Customer/checkout\'\">Proceed</button>';

    document.getElementById('popup').innerHTML += '<button onclick=hidePopup()>Close</button>'

    //document.getElementById('popup').style.display = 'block';
    // setTimeout(hidePopup, 3000);

    // setTimeout(function () {
    //     popup.classList.add('popup-visible');
    // }, 250);


</script>