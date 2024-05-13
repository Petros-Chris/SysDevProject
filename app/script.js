


function displayCartLoop($pro_id, $pro_brand) {
    var box = document.getElementById('popup');
    box.innerHTML += '<a href=/Product/index?id=$pro_id\">$pro_brand $pro_shape $pro_price</a><br>'
}

function removeProductFromCart($product_id) {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log('Product removed from cart:', $product_id);
            } else {
                console.error('Failed to remove product from cart:', xhr.responseText);
            }
        }
    };
    xhr.open('POST', '/Cart/removeCart');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('id=' + $product_id);
}

function hidePopup() {
    popup.classList.remove('popup-visible');
    setTimeout(function () {
        popup.style.display = 'none';
    }, 250);
}

function generateStarRating(rating) {
    var stars = '';
    for (var i = 1; i <= 5; i++) {
        var starClass = (i <= rating) ? 'filled' : 'empty';
        stars += '<span class="star ' + starClass + '">&#9733;</span>'; // Unicode for a star icon
    }
    return stars;
}
