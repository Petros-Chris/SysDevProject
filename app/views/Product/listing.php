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
                        console.log('Product added to wishlist:', xhr.responseText);
                    } else {
                        console.error('Failed to add product to wishlist:', xhr.responseText);
                    }
                }
            };
            var method = icon.classList.contains('clicked') ? 'add' : 'remove';
            xhr.open('POST', '/Wishlist/' + method);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('id=' + $product_id);
}
</script>