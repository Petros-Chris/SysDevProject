function removeProductFromCart($product_id) {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log('Product removed from cart:', $product_id);
                localStorage.setItem('cartVisible', 'true');
                location.reload();
            } else {
                console.error('Failed to remove product from cart:', xhr.responseText);
            }
        }
    };
    xhr.open('POST', '/Cart/removeCart');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('id=' + $product_id);
}

function removeProductFromWishlist($product_id) {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log('Product removed from cart:', $product_id);
                localStorage.setItem('wishlistVisible', 'true');
                location.reload();
            } else {
                console.error('Failed to remove product from cart:', xhr.responseText);
            }
        }
    };
    xhr.open('POST', '/Wishlist/remove');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('id=' + $product_id);
}

function addProduct(product_id, quantity) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log('Product added to cart:', product_id);
                localStorage.setItem('cartVisible', 'true');
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
    var popup = document.getElementById('popup');
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
                    hidePopup2();
                    document.getElementById('popup').style.display = 'block';

                    setTimeout(function () {
                        popup.classList.add('popup-visible');
                    }, 250);
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
    var popup2 = document.getElementById('popup2');
    if (popup2.style.display === 'block') {
        hidePopup2();
    } else {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log("Wishlist displayed");
                    hidePopup();
                    document.getElementById('popup2').style.display = 'block';

                    setTimeout(function () {
                        popup2.classList.add('popup-visible');
                    }, 250);
                } else {
                    console.error('Failed to display wishlist', xhr.responseText);
                }
            }
        };
        xhr.open('GET', '/Wishlist/show');
        xhr.send();
    }
}

function hidePopup() {
    var popup = document.getElementById('popup');
    popup.classList.remove('popup-visible');
    setTimeout(() => {
        popup.style.display = 'none';
    }, 300);
    localStorage.setItem('cartVisible', 'false');
}

function hidePopup2() {
    var popup2 = document.getElementById('popup2');
    popup2.classList.remove('popup-visible');
    setTimeout(() => {
        popup2.style.display = 'none';
    }, 300);
    localStorage.setItem('wishlistVisible', 'false');
}

function showPopup() {
    var popup = document.getElementById('popup');
    hidePopup2();
    popup.style.display = 'block';
    setTimeout(() => {
        popup.classList.add('popup-visible');
    }, 10);
    localStorage.setItem('cartVisible', 'true');
}

function showPopup2() {
    var popup2 = document.getElementById('popup2');
    hidePopup();
    popup2.style.display = 'block';
    setTimeout(() => {
        popup2.classList.add('popup-visible');
    }, 10);
    localStorage.setItem('wishlistVisible', 'true');
}

document.addEventListener("DOMContentLoaded", function () {
    if (localStorage.getItem('cartVisible') === 'true') {
        showPopup();
        localStorage.setItem('cartVisible', 'false');
    }
    if (localStorage.getItem('wishlistVisible') === 'true') {
        showPopup2();
        localStorage.setItem('wishlistVisible', 'false');
    }
});

function generateStarRating(rating) {
    var stars = '';
    for (var i = 1; i <= 5; i++) {
        var starClass = (i <= rating) ? 'filled' : 'empty';
        stars += '<span class="star ' + starClass + '">&#9733;</span>';
    }
    return stars;
}

function characterLimit() {
    document.getElementById('form-description').addEventListener('input', function () {
        var maxLength = 1500;
        var currentLength = this.value.length;
        var remainingC = document.getElementById('remainingCharacter');
        remainingC.textContent = (maxLength - currentLength);
    });
}
