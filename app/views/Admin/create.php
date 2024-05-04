<html>
    <head>
	    <title><?= $name ?> view</title>
    </head>

    <body>
	    <div class='container'>
		    <form method='post' action=''>
			    <div class="form-group">
			    	<label>Brand:<input type="text" class="form-control" name="brand"/></label>
			    </div>

			    <div class="form-group">
			    	<label>Model:<input type="text" class="form-control" name="model"/></label>
			    </div>

			    <div class="form-group">
			    	<label>Color:<input type="text" class="form-control" name="color"/></label>
			    </div>

			    <div class="form-group">
			    	<label>Price:<input type="text" class="form-control" name="cost_price"/></label>
			    </div>

                <div class="form-group">
			    	<label>Shape:<input type="text" class="form-control" name="shape"/></label>
			    </div>

                <div class="form-group">
			    	<label>Size:<input type="text" class="form-control" name="size"/></label>
			    </div>

                <div class="form-group">
			    	<label>Optical Sun:<input type="text" class="form-control" name="optical_sun"/></label>
			    </div>

                <div class="form-group">
			    	<label>Description:<textarea type="text" class="form-control" name="description"> </textarea></label>
			    </div>

				<div class="form-group">
			    	<label>Quantity:<input type="text" class="form-control" name="quantity"></input></label>
			    </div>

			    <div class="form-group">
			    	<input type="submit" name="action" value="Create Product"/> 
			    </div>
		    </form>
	    </div>
    </body>
</html>