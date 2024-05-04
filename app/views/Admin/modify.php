<html>
    <head>
	    <title><?= $name ?> view</title>
	</head>

    <body>
	    <div class='container'>
		    <form method='post' action=''>
			    <div class="form-group">
			    	<label>Brand:<input type="text" class="form-control" name="brand" value=<?= $data->brand ?>></label>
			    </div>

			    <div class="form-group">
			    	<label>Model:<input type="text" class="form-control" name="model" value=<?= $data->model ?>></label>
			    </div>

			    <div class="form-group">
			    	<label>Color:<input type="text" class="form-control" name="color" value=<?= $data->color ?>></label>
			    </div>

			    <div class="form-group">
			    	<label>Price:<input type="text" class="form-control" name="cost_price" value=<?= $data->cost_price ?>></label>
			    </div>

                <div class="form-group">
			    	<label>Shape:<input type="text" class="form-control" name="shape" value=<?= $data->shape ?>></label>
			    </div>

                <div class="form-group">
			    	<label>Size:<input type="text" class="form-control" name="size" value=<?= $data->size ?>></label>
			    </div>

                <div class="form-group">
			    	<label>Optical Sun:<input type="text" class="form-control" name="optical_sun" value=<?= $data->optical_sun ?>></label>
			    </div>

                <div class="form-group">
			    	<label>Description:<textarea type="text" class="form-control" name="description"><?= $data->description ?></textarea></label>
			    </div>

				<div class="form-group">
			    	<label>Quantity:<input type="text" class="form-control" name="quantity"><?= $data->quantity ?></input></label>
			    </div>

				<div class="form-group">
			    	<label>Disable:<input type="checkbox" name="disable" value="on"></input></label>
			    </div>

			    <div class="form-group">
			    	<input type="submit" name="action" value="Create Product"/> 
			    </div>
		    </form>
	    </div>
    </body>
</html>