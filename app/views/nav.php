<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
    <link rel="stylesheet" type="text/css" href="/app/style.css">
    <script src="/app/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<nav class="menu">
    <ol>
        <li class="menu-item"><a href="\Product\listing">Shop</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="/Product/listing?type=brand&filter=Cartier">Eyeglasses</a>
                </li>
                <li class="menu-item"><a href="#0">Sunglasses</a>
                </li>
            </ol>
        </li>
        <li class="menu-item"><a href="#0">Brands</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="/Product/listing?type=brand&filter=Gucci">Gucci</a></li>
                <li class="menu-item"><a href="/Product/listing?type=brand&filter=Cartier">Cartier</a></li>
                <li class="menu-item"><a href="#0">More ></a></li>
            </ol>
        </li>
        <li class="menu-item"><a href="#0">About</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="#0">About Mes Yeux Tes Yeux</a></li>
                <li class="menu-item"><a href="\contact">Contact Us</a></li>
            </ol>
        </li>
        <li class="menu-item"><a href="\Customer\dashboard">Account</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="\Customer\dashboard">My Account</a></li>
                <li class="menu-item"><a href="\User\login">Login/Register</a></li>
            </ol>
        </li>
        <li class="menu-item">
            <div class="tools">
                <button>🔍</button>
                <button>🤸‍♂️</button>
                <button>EN</button>
            </div>
        </li>
        <!-- onclick="adjustFilter(event, 'eyeglasses')" -->
    </ol>

    </div>
</nav>
<div id="test"></div>

</html>

<script>
    function adjustFilter(event, product_id) {
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {

                    console.log('Response from server:', xhr.response);
                } else {
                    console.error('Failed to remove product from cart:', xhr.responseText);
                }
            }
        };
        xhr.open('POST', '/Product/eyeglasses');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('filter=' + encodeURIComponent(product_id));
    }
</script>
