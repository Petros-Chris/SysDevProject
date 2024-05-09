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
				<label>Price:<input type="text" class="form-control" name="cost_price" value=<?= $data->cost_price ?>
						required></label>
			</div>

			<div class="form-group">
				<label>Shape:<input type="text" class="form-control" name="shape" value=<?= $data->shape ?>
						required></label>
			</div>

			<div class="form-group">
				<label>Size:<input type="text" class="form-control" name="size" value=<?= $data->size ?>
						required></label>
			</div>

			<div class="form-group">
				<label>Optical Sun:<input type="text" class="form-control" name="optical_sun"
						value=<?= $data->optical_sun ?> required></label>
			</div>

			<div class="form-group">
				<label>Description:<textarea type="text" class="form-control"
						name="description"><?= $data->description ?></textarea></label>
			</div>

			<div class="form-group">
				<label>Quantity:<input type="text" class="form-control" name="quantity" value=<?= $data->quantity ?>
						required></label>
			</div>

			<div class="form-group">
				<label>Is Disabled:<input type="checkbox" id="disable" name="disable" value="1"></label>
			</div>

			<div class="form-group">
				<input type="submit" name="action" value="Modify Product"/>
			</div>
		</form>
	</div>
</body>

</html>
<script>
	var checkbox = document.getElementById('disable');

	if (<?= $data->disable ?> == 1) {
		checkbox.checked = true;
	}
</script>