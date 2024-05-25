<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<html>
<body>
    <div id='popup' class='popup'>
        <div class="popup-content">
            <div class="popup-items" id="popupItems"></div>
            <div class="popup-total" id="popupTotal"></div>
            <div class="popup-button" id="checkoutButton" style="display: none;">
                <button id="checkoutBtn">Proceed to Checkout</button>
            </div>
            <div class="close-button">
                <button onclick="hidePopup()">Close</button>
            </div>
        </div>
    </div>

    <script>
        var price = 0;
        var popupItemsContent = '';
        var popupTotalContent = '';

        <?php if (isset($cart) && count($cart) > 0): ?>
            <?php foreach ($cart as $product): ?>
                var pro_id = <?= json_encode($product->product_id) ?>;
                var pro_shape = <?= json_encode($product->shape) ?>;
                var pro_price = <?= json_encode($product->cost_price) ?>;
                var amount_bought = <?= json_encode($product->quantity) ?>;
                var price_of_specific_items = parseFloat(pro_price) * amount_bought;
                price += price_of_specific_items;

                popupItemsContent +=
                    '<div class="popup-item">' +
                        '<img src="/app/resources/images/product_' + pro_id + '.png" alt="Product Image">' +
                        '<a href="/Product/index?id=' + pro_id + '">' + pro_shape + ' - ' + amount_bought + ' - $' + price_of_specific_items.toFixed(2) + '</a>' +
                        '<span onclick="removeProductFromCart(' + pro_id + ')"><i class="fas fa-trash"></i></span>' +
                    '</div>';
            <?php endforeach; ?>
            popupTotalContent = 'Total: $' + price.toFixed(2);
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById('checkoutButton').style.display = 'block';
            });
        <?php else: ?>
            popupItemsContent += '<p>Cart Is Empty!</p>';
        <?php endif; ?>

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('popupItems').innerHTML = popupItemsContent;
            document.getElementById('popupTotal').innerHTML = popupTotalContent;
            if (localStorage.getItem('cartVisible') === 'true') {
                showPopup();
            }
        });

        document.getElementById('checkoutBtn').addEventListener('click', function() {
            localStorage.setItem('cartVisible', 'true');    
            window.location.href = '/Customer/checkout';
                
            });

        function showPopup() {
            var popup = document.getElementById('popup');
            popup.style.display = 'block';
            setTimeout(() => {
                popup.classList.add('popup-visible');
            }, 10);
            localStorage.setItem('cartVisible', 'true');
        }

        function hidePopup() {
            var popup = document.getElementById('popup');
            popup.classList.remove('popup-visible');
            setTimeout(() => {
                popup.style.display = 'none';
            }, 300);
            localStorage.setItem('cartVisible', 'false');
        }
    </script>
</body>
</html>