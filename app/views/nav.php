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
            <li class="menu-item"><a href="\Product\listing"><?= __('Shop') ?></a>
                <ol class="sub-menu">
                    <li class="menu-item"><a
                            href="/Product/listing?type=optical_sun&filter=Optical"><?= __('Optical Glasses') ?> </a>
                    </li>
                    <li class="menu-item"><a href="/Product/listing?type=optical_sun&filter=Sun"><?= __('Sunglasses') ?></a>
                    </li>
                </ol>
            </li>
        <?php endif; ?>
        <?php if (!isset($_SESSION['employee_id'])): ?>
            <li class="menu-item"><a href="/Product/more"><?= __('Brands') ?></a>
                <ol class="sub-menu">
                    <li class="menu-item"><a href="/Product/listing?type=brand&filter=Gucci"><?= __('Gucci') ?></a></li>
                    <li class="menu-item"><a href="/Product/listing?type=brand&filter=Cartier"><?= __('Cartier') ?></a></li>
                    <li class="menu-item"><a href="/Product/more"><?= __('More') ?> ></a></li>
                </ol>
            </li>
        <?php endif; ?>

        <?php if (isset($_SESSION['isAdmin'])): ?>
            <li class="menu-item"><a href='/Admin/index'><?= __('Admin') ?></a>
                <ol class="sub-menu">
                    <li class="menu-item"><a href='/Admin/create'><?= __('New Product') ?></a></li>
                    <li class="menu-item"><a href='/Ticket/ongoing'><?= __('Ongoing Tickets') ?></a></li>
                    <li class="menu-item"><a href='/Admin/index'><?= __('More') ?></a></li>
                </ol>
            </li>
        <?php endif; ?>

        <?php if (!isset($_SESSION['isAdmin']) && isset($_SESSION['employee_id'])): ?>
            <li class="menu-item"><a href='/Employee/index'><?= __('Employee') ?></a>
                <ol class="sub-menu">
                    <li class="menu-item"><a href='/Admin/productListing'><?= __('Modify Product') ?></a></li>
                    <li class="menu-item"><a href='/Ticket/ongoing'><?= __('Ongoing Tickets') ?></a></li>
                    <li class="menu-item"><a href='/Employee/index'><?= __('More') ?></a></li>
                </ol>
            </li>
        <?php endif; ?>

        <li class="menu-item"><a href="/about"><?= __('About') ?></a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="/about"><?= __('About MYTY') ?></a></li>
                <li class="menu-item"><a href="/contact"><?= __('Contact Us') ?></a></li>
            </ol>
        </li>
        <?php if (!isset($_SESSION['customer_id'])): ?>
            <li class="menu-item"><a href="/User/login"><?= __('Login') ?></a></li>
        <?php else: ?>
            <li class="menu-item"><a href="/Customer/dashboard"><?= __('Account') ?></a>
                <ol class="sub-menu">
                    <li class="menu-item"><a href="/Customer/dashboard"><?= __('Dashboard') ?></a></li>
                    <?php if (!isset($_SESSION['customer_id']) || isset($_SESSION['employee_id'])): ?>
                        <li class="menu-item"><a href="/User/login"><?= __('Login/Register') ?></a></li>
                    <?php endif; ?>
                </ol>
            </li>
        <?php endif; ?>

        <li class="menu-item">
            <div class="tools">
                <button onclick="toggleSearch()">🔍</button>
                <form action="/Product/search" method="GET" class="search-form" id="searchForm"
                    onsubmit="return submitSearchForm()">
                    <input type="text" id="search" name="search" placeholder="eg: Gucci">
                    <button type="submit"><?= __('Search') ?></button>
                </form>
            </div>
        </li>

        <li class="menu-item cart-language">
            <div class="tools">
                <button onclick="viewCart()">🛒</button>
            </div>

        </li>
        <?php if (isset($_SESSION['customer_id'])): ?>
            <li class="menu-item cart-language">
                <div class="tools">
                    <button onclick="viewWishlist()">💗</button>
                </div>
            </li>
        <?php endif; ?>
        <li class="menu-item"><a href=""><?= __('Language') ?></a>
            <ol class="sub-menu">
                <li class="menu-item"><button onclick="updateLanguageCookie('fr')"><?= __('french') ?></button></li>
                <li class="menu-item"><button onclick="updateLanguageCookie('en')"><?= __('english') ?></button></li>
            </ol>
        </li>

        <?php if (isset($_SESSION['customer_id']) || isset($_SESSION['employee_id'])): ?>
            <li class="menu-item"><a href="/User/login"><?= __('Log Out') ?></a></li>
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
            return false;
        }
    }
</script>