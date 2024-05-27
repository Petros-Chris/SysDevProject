<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?> view</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>
<body>
    <div class="container" id="containerMap">
        <h1>Checkout</h1>
        <form id="orderForm" action="" method="POST">
            <div class="form-group-checkout">
                <label for="searchInput">Address</label>
                <input type="text" id="searchInput" placeholder="Enter your address" autocomplete="off" name="address" required>
                <div id="suggestions"></div>
            </div>
            <div class="form-group-checkout">
                <label for="postalCode">Postal Code</label>
                <input type="text" id="postalCode" name="postalCode" required>
            </div>
            <div class="form-group-checkout">
                <label for="state">State</label>
                <select id="state" name="state" required>
                    <option value="">Select Province</option>
                    <option value="AB">Alberta</option>
                    <option value="BC">British Columbia</option>
                    <option value="MB">Manitoba</option>
                    <option value="NB">New Brunswick</option>
                    <option value="NL">Newfoundland and Labrador</option>
                    <option value="NS">Nova Scotia</option>
                    <option value="ON">Ontario</option>
                    <option value="PE">Prince Edward Island</option>
                    <option value="QC">Quebec</option>
                    <option value="SK">Saskatchewan</option>
                </select>
            </div>
            <div id="map"></div>
            <div class="form-group-checkout">
                <label for="cardName">Cardholder's Name</label>
                <input type="text" id="cardName" name="cardName" required>
            </div>
            <div class="form-group-checkout">
                <label for="cardNumber">Card Number</label>
                <input type="text" id="cardNumber" name="cardNumber" pattern="\d{15,16}" required placeholder="eg: 1234123412341234 or 123412341234123">
            </div>
            <div class="form-group-checkout flex-group">
                <div class="half-width">
                    <label for="expiry">Expiration Date</label>
                    <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>
                </div>
                <div class="half-width">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" pattern="\d{3,4}" required>
                </div>
            </div>
            <input type="hidden" name="total" value="">
            <input type="submit" value="Place Order" style="background-color: blue; color: white; width: 200px;">
        </form>
    </div>

    <script>
        var map = L.map('map').setView([45.509, -73.667], 13); // Montreal center
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        var apiKey = '3a5a6881d18b4a7da94f9f41908a16f6';
        var suggestionsBox = document.getElementById('suggestions');

        function fetchAddress(input) {
            var url = `https://api.geoapify.com/v1/geocode/autocomplete?text=${encodeURIComponent(input)}&format=json&apiKey=${apiKey}`;
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (data.results && data.results.length > 0) {
                        displaySuggestions(data.results);
                    } else {
                        suggestionsBox.style.display = 'none';
                        console.log("No results found.");
                    }
                })
                .catch(error => {
                    console.error('Error fetching data: ', error);
                    suggestionsBox.style.display = 'none';
                });
        }

        function displaySuggestions(features) {
            suggestionsBox.innerHTML = '';
            suggestionsBox.style.display = 'block';
            features.forEach(feature => {
                var address = feature.formatted.split(',');
                address = address.slice(0, -2).join(',') + ',' + address.slice(-1);
                var div = document.createElement('div');
                div.innerHTML = address;
                div.className = 'suggestion';
                div.onclick = function () {
                    selectAddress(feature);
                };
                suggestionsBox.appendChild(div);
            });
        }

        function selectAddress(feature) {
            var latLng = [feature.lat, feature.lon];
            map.setView(latLng, 16);
            L.marker(latLng).addTo(map);

            var address = feature.formatted.split(',');
            address = address.slice(0, -2).join(',') + ',' + address.slice(-1);

            document.getElementById('searchInput').value = address;
            suggestionsBox.style.display = 'none';
        }

        function debounce(func, delay) {
            var debounceTimer;
            return function () {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(() => func.apply(this, arguments), delay);
            };
        }

        document.getElementById('searchInput').addEventListener('input', debounce(function () {
            if (this.value.length > 3) {
                fetchAddress(this.value);
            } else {
                suggestionsBox.style.display = 'none';
            }
        }, 500));

        document.getElementById('orderForm').addEventListener('submit', function (event) {
            event.preventDefault();
            var address = document.getElementById('searchInput').value;
            var total = 0;

            this.address.value = address;
            this.total.value = total;

            this.submit();
        });
    </script>
</body>
</html>
