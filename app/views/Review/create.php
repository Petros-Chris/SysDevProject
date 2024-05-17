<html>
<head>
	<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

    <body>
	    <div class='container'>
		    <form method='post' action=''>
			    <div class="form-group">
			    	<label>Rating:<input type="text" class="form-control" name="rating"/></label>
			    </div>

			    <div class="form-group">
			    	<label>Description:<input type="text" class="form-control" name="description"/></label>
			    </div>

			    <div class="form-group">
			    	<label>Add An Image:<input type="text" class="form-control" name="image_link"/></label>
			    </div>
                <input type='Submit'value='Submit'name='create_review'>
				<a href="#" onclick="history.back();">Cancel</a>
		    </form>
	    </div>
    </body>
</html>