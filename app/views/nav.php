<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="/app/css/style.scss">
    <script src="/app/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<nav class="menu">
    <ol>
        <a href="/home"> <img src="/app/resources/logo/mesyeuxtesyeuxLOGO.png" class="logo" alt="Image Logo"
                height="56px" ; width="160px" ;></a>
        <?php if (!isset($_SESSION['employee_id'])): ?>
            <li class="menu-item"><a href="\Product\listing">Shop</a>
                <ol class="sub-menu">
                    <li class="menu-item"><a href="/Product/listing?type=optical_sun&filter=Optical">Optical Glasses </a>
                    </li>
                    <li class="menu-item"><a href="/Product/listing?type=optical_sun&filter=Sun">Sunglasses</a>
                    </li>
                </ol>
            </li>
        <?php endif; ?>
        <?php if (!isset($_SESSION['employee_id'])): ?>
            <li class="menu-item"><a href="/Product/more">Brands</a>
                <ol class="sub-menu">
                    <li class="menu-item"><a href="/Product/listing?type=brand&filter=Gucci">Gucci</a></li>
                    <li class="menu-item"><a href="/Product/listing?type=brand&filter=Cartier">Cartier</a></li>
                    <li class="menu-item"><a href="/Product/more">More ></a></li>
                </ol>
            </li>
        <?php endif; ?>

        <?php if (isset($_SESSION['isAdmin'])): ?>
            <li class="menu-item"><a href='/Admin/index'>Admin</a>
                <ol class="sub-menu">
                    <li class="menu-item"><a href='/Admin/create'><?= __('New Product') ?></a></li>
                    <li class="menu-item"><a href='/Ticket/ongoing'><?= __('Ongoing Tickets') ?></a></li>
                    <li class="menu-item"><a href='/Admin/index'><?= __('More') ?></a></li>
                </ol>
            </li>
        <?php endif; ?>

        <?php if (!isset($_SESSION['isAdmin']) && isset($_SESSION['employee_id'])): ?>
            <li class="menu-item"><a href='/Employee/index'>Employee</a>
                <ol class="sub-menu">
                    <li class="menu-item"><a href='/Employee/productListing'><?= __('Modify Product') ?></a></li>
                    <li class="menu-item"><a href='/Ticket/ongoing'><?= __('Ongoing Tickets') ?></a></li>
                    <li class="menu-item"><a href='/Employee/index'><?= __('More') ?></a></li>
                </ol>
            </li>
        <?php endif; ?>

        <li class="menu-item"><a href="/about">About</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="/about">About MYTY</a></li>
                <li class="menu-item"><a href="/contact">Contact Us</a></li>
            </ol>
        </li>
        <li class="menu-item"><a href="/Customer/dashboard">Account</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="/Customer/dashboard">My Account</a></li>
                <?php if (!isset($_SESSION['customer_id']) || isset($_SESSION['employee_id'])): ?>
                    <li class="menu-item"><a href="/User/login">Login/Register</a></li>
                <?php endif; ?>
            </ol>
        </li>

        <li class="menu-item">
            <div class="tools">
                <button onclick="toggleSearch()">🔍</button>
                <form action="/Product/search" method="GET" class="search-form" id="searchForm"
                    onsubmit="return submitSearchForm()">
                    <input type="text" id="search" name="search" placeholder="eg: Gucci">
                    <button type="submit">Search</button>
                </form>
            </div>
        </li>

        <li class="menu-item cart-language">
            <div class="tools">
                <button onclick="viewCart()">🛒</button>
            </div>

        </li>
        <li class="menu-item cart-language">
            <div class="tools">
                <button onclick="viewWishlist()">💗</button>
            </div>
        </li>
        <li class="menu-item"><a href="">Language</a>
            <ol class="sub-menu">
                <li class="menu-item"><button onclick="updateLanguageCookie('fr')">french</button></li>
                <li class="menu-item"><button onclick="updateLanguageCookie('en')">english</button></li>
            </ol>
        </li>

        <?php if (isset($_SESSION['customer_id']) || isset($_SESSION['employee_id'])): ?>
            <li class="menu-item"><a href="/User/login">Log Out</a></li>
        <?php endif; ?>
    </ol>


    </div>
</nav>

</html>

<script>
    function updateLanguageCookie(lang) {
        document.cookie = "lang=" + lang + ";expires=" + new Date(Date.now() + (30 * 24 * 60 * 60 * 1000)).toUTCString() + ";path=/;SameSite=None;secure";

        window.location.reload();
    }




    //god knows for this (no wokry)
    // function callLink(url) {
    //     fetch('app\controllers\Cart.php', {
    //         method: 'POST',
    //         body: JSON.stringify({ action: 'viewCart' })
    //     })
    //         // Handle the response as needed)
    //         .catch(error => {
    //             // Handle errors if any
    //             console.error('Error:', error);
    //         });

    // }




    function toggleSearch() {
        var searchForm = document.getElementById("searchForm");
        searchForm.classList.toggle("active");

        var cartAndLanguage = document.getElementsByClassName("cart-language");
        for (var i = 0; i < cartAndLanguage.length; i++) {
            cartAndLanguage[i].classList.toggle("move-right");
        }
    }

    function submitSearchForm() {
        var searchInput = document.getElementById("search").value.trim();
        if (searchInput === "") {
            return false; // Prevent form submission if search input is empty
        }
    }
</script>