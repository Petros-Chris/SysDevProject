
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
                location.reload(); //seems annyoing and a waste of resources 
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

//For product index
function addProduct(product_id, quantity) {
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
    xhr.send('id=' + product_id + '&quantity=' + quantity);
}

function viewCart() {
    if (popup.style.display === 'block') {
        hidePopup();
    } else {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var parser = new DOMParser();
                    var xmlDoc = parser.parseFromString(xhr.responseText, "text/html");
                    console.log("Cart displayed");

                    document.getElementById('popup').style.display = 'block';

                    setTimeout(function () {
                        popup.classList.add('popup-visible');
                    }, 250);

                    //setTimeout(hidePopup, 3000);
                } else {
                    console.error('Failed to display cart', xhr.responseText);
                }
            }
        };
        xhr.open('GET', '/Cart/view');
        xhr.send();
    }
}

function viewWishlist() {
    if (popup2.style.display === 'block') {
        hidePopup2();
    } else {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var parser = new DOMParser();
                    var xmlDoc = parser.parseFromString(xhr.responseText, "text/html");
                    console.log("Wishlist displayed");

                    document.getElementById('popup2').style.display = 'block';

                    setTimeout(function () {
                        popup2.classList.add('popup-visible');
                    }, 250);

                    //setTimeout(hidePopup, 3000);
                } else {
                    console.error('Failed to display cart', xhr.responseText);
                }
            }
        };
        xhr.open('GET', '/Wishlist/show');
        xhr.send();
    }
}

function hidePopup() {
    setTimeout(function () {
        popup.classList.remove('popup-visible');
    }, 0);
    setTimeout(function () {
        document.getElementById('popup').style.display = 'none';
    }, 500);
}

function hidePopup2() {
    setTimeout(function () {
        popup2.classList.remove('popup-visible');
    }, 0);
    setTimeout(function () {
        document.getElementById('popup2').style.display = 'none';
    }, 500);
}

