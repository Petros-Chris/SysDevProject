<script>
    <?php foreach ($list as $wishItem): ?>
        var pro_id = <?= json_encode($wishItem->product_id) ?>;
        var pro_shape = <?= json_encode($wishItem->product->shape) ?>;
        var pro_price = <?= json_encode($wishItem->product->brand) ?>;


        document.getElementById('popup2').innerHTML +=
            '<a href="/Product/index?id=' + pro_id + '">' + pro_shape + ' ' + pro_price + '</a>' +
            '<span onclick="removeProductFromCart(' + pro_id + ')">&#128465;</span><br>';

    <?php endforeach; ?>

    document.getElementById('popup2').innerHTML += '<button onclick=hidePopup2()>Close</button>'

    // document.getElementById('popup2').style.display = 'block';
    // setTimeout(hidePopup, 3000);

    // setTimeout(function () {
    //     popup2.classList.add('popup-visible');
    // }, 250);
</script>