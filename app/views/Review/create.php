<html>
    <head>
	    <title><?= $name ?> view</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
		    </form>
	    </div>
    </body>
</html>