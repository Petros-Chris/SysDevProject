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
                <li class="menu-item"><a href="/Product/listing?type=optical_sun&filter=Optical">Eyeglasses</a>
                </li>
                <li class="menu-item"><a href="/Product/listing?type=optical_sun&filter=Sun">Sunglasses</a>
                </li>
            </ol>
        </li>
        <li class="menu-item"><a href="/Product/more">Brands</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="/Product/listing?type=brand&filter=Gucci">Gucci</a></li>
                <li class="menu-item"><a href="/Product/listing?type=brand&filter=Cartier">Cartier</a></li>
                <li class="menu-item"><a href="/Product/more">More ></a></li>
            </ol>
        </li>
        <li class="menu-item"><a href="\Customer\about">About</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="\Customer\about">About Mes Yeux Tes Yeux</a></li>
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
                <button id="langBtn" onclick="updateLanguageCookie('en')">en</button>
                <button onclick="updateLanguageCookie('fr')">fr</button>
            </div>
        </li>
    </ol>

    </div>
</nav>

</html>

<script>
    // function switchLang() {
    //     var button = document.getElementById('langBtn')
    //     switch (button.value) {
    //         case 'en': {
    //             button.innerText = 'fr';
    //             updateLanguageCookie('fr');
    //             break;
    //         }
    //         case 'fr': {
    //             button.innerText = 'en';
    //             updateLanguageCookie('en');
    //             break;
    //         }
    //         default: {
    //             button.innerText = 'en';
    //             updateLanguageCookie('en');
    //         }
    //     }
    // }

    function updateLanguageCookie(lang) {
        // Set the cookie value
        document.cookie = "lang=" + lang + ";expires=" + new Date(Date.now() + (30 * 24 * 60 * 60 * 1000)).toUTCString() + ";path=/;SameSite=None;secure";

        // Reload the page to reflect the change
        window.location.reload();
    }

</script>