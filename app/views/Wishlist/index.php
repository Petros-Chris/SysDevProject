<html>

<body>
    <div id='popup2' class='popup'>
        <div class="popup-content">
            <div class="popup-items" id="wishlistItems"></div>
            <div class="close-button">
                <button onclick="hidePopup2()">Close</button>
            </div>
        </div>
    </div>

    <script>
        var wishlistItemsContent = '';
        var wishlistIsEmpty = true;

        <?php if (isset($list) && count($list) > 0): ?>
            wishlistIsEmpty = false;
            <?php foreach ($list as $wishItem): ?>
                var pro_id = <?= json_encode($wishItem->product_id) ?>;
                var pro_shape = <?= json_encode($wishItem->product->shape) ?>;
                var pro_price = <?= json_encode($wishItem->product->brand) ?>;

                wishlistItemsContent +=
                    '<div class="popup-item">' +
                        '<a href="/Product/index?id=' + pro_id + '">' + pro_shape + ' ' + pro_price + '</a>' +
                        '<span onclick=" removeProductFromWishlist(' + pro_id + ')"><i class="fas fa-trash"></i></span>' +
                    '</div>';
            <?php endforeach; ?>
        <?php endif; ?>

        if (wishlistIsEmpty) {
            wishlistItemsContent += '<p>No Items In WishList!</p>';
        }

        document.getElementById('wishlistItems').innerHTML = wishlistItemsContent;

    </script>
</body>
</html>