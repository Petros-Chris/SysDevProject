<html>
    <head>
	    <title><?= $name ?> view</title>
        <link rel="stylesheet" type="text/css" href="/app/style.css">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>

	<body>
	<form method = "POST" action="/Product/search">
            <input name="search_box" placeholder="eg: Blue">
            <input type="submit" name="action" value="color">
            <input type="submit" name="action" value="content">
        </form>
	</body>
</html>