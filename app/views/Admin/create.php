<html>

<head>
	<title><?= $name ?> view</title>
</head>

<body>
	<div class='container'>



		<form method='post' action=''>
			<!-- <div class="form-group">
				<label>Brand:<input type="text" class="form-control" name="brand" /></label>
			</div> -->

			<label>Brand:<select name="brand" class="form-control">
					<option value="Boss">Boss</option>
					<option value="Cartier">Cartier</option>
					<option value="Dexter Marx">Dexter Marx</option>
					<option value="Gucci">Gucci</option>
					<option value="Oakley">Oakley</option>
					<option value="Oliver Peoples">Oliver Peoples</option>
					<option value="Prada">Prada</option>
					<option value="Ray-Ban">Ray-Ban</option>
				</select></label>


			<div class="form-group">
				<label>Model:<input type="text" class="form-control" name="model" /></label>
			</div>

			<label>Color:<select name="color" class="form-control">
					<option value="Black">Black</option>
					<option value="Brown">Brown</option>
					<option value="Clear">Clear</option>
					<option value="Green">Green</option>
					<option value="Red">Red</option>
					<option value="Tortoise">Tortoise</option>
					<option value="White">White</option>
				</select></label>

			<div class="form-group">
				<label>Price To Manufacter:<input type="text" class="form-control" name="cost_price" /></label>
			</div>

			<label>Shape:<select name="shape" class="form-control">
					<option value="Aviator">Aviator</option>
					<option value="Cat eye">Cat eye</option>
					<option value="Geometric">Geometric</option>
					<option value="Oval">Oval</option>
					<option value="Round">Round</option>
					<option value="Rectangle">Rectangle</option>
					<option value="Square">Square</option>
				</select></label>

			<div class="form-group">
				<label>Size:<input type="text" class="form-control" name="size" /></label>
			</div>

			<label>Optical Sun:<select name="optical_sun" class="form-control">
					<option value="Optical">Optical</option>
					<option value="Sun">Sun</option>

				</select></label>

			<div class="form-group">
				<label>Description:<textarea type="text" class="form-control" name="description"> </textarea></label>
			</div>

			<div class="form-group">
				<label>Quantity:<input type="text" class="form-control" name="quantity"></input></label>
			</div>

			<div class="form-group">
				<input type="submit" name="action" value="Create Product" />
			</div>
		</form>
	</div>
</body>

</html>