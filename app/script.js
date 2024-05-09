


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
    xhr.open('POST', '/Product/removeCart');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('id=' + $product_id);
}

function hidePopup() {
    popup.classList.remove('popup-visible');
    setTimeout(function () {
        popup.style.display = 'none';
    }, 250);
}
