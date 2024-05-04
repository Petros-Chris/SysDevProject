<html>
    <head>
	    <title><?= $name ?> view</title>
        <link rel="stylesheet" type="text/css" href="/app/style.css">
    </head>

	<body>
	
	</body>
</html>

<script>
        function toggleHeart(icon, $product_id) {
            icon.classList.toggle('clicked');

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Product added successfully
                        console.log('Product added to cart:', $product_id);
                    } else {
                        // Handle error
                        console.error('Failed to add product to cart:', xhr.responseText);
                    }
                }
                };
                var method = icon.classList.contains('clicked') ? 'add' : 'remove';

            xhr.open('POST', '/Wishlist/' + method);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('id=' + $product_id);
}
</script>
    </script>