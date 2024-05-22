<html>

<body>
    <div id='popup2' class='popup'></div>
</body>

</html>
<script>
    <?php if (isset($list)): ?>
        <?php foreach ($list as $wishItem): ?>
            var pro_id = <?= json_encode($wishItem->product_id) ?>;
            var pro_shape = <?= json_encode($wishItem->product->shape) ?>;
            var pro_price = <?= json_encode($wishItem->product->brand) ?>;


            document.getElementById('popup2').innerHTML +=
                '<a href="/Product/index?id=' + pro_id + '">' + pro_shape + ' ' + pro_price + '</a>' +
                '<span onclick="removeProductFromCart(' + pro_id + ')">&#128465;</span><br>';
        <?php endforeach; ?>
    <?php else: ?>
        document.getElementById('popup2').innerHTML += '<p>No Items In WishList!</p>'
    <?php endif ?>
    document.getElementById('popup2').innerHTML += '<button onclick=hidePopup2()>Close</button>'
</script>