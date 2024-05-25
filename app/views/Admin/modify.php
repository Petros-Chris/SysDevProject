<html>

<head>
	<title><?= $name ?> view</title>
</head>

<body>
	<div class='container'>


		<form method='post' action='' enctype="multipart/form-data">
			<div class="form-group">
				<label><?= __('Brand') ?>:<input type="text" class="form-control" name="brand" value=<?= $data->brand ?>></label>
			</div>

			<div class="form-group">
				<label><?= __('Model') ?>:<input type="text" class="form-control" name="model" value=<?= $data->model ?>></label>
			</div>

			<div class="form-group">
				<label><?= __('Color') ?>:<input type="text" class="form-control" name="color" value=<?= $data->color ?>></label>
			</div>

			<div class="form-group">
				<label><?= __('Price') ?>:<input type="text" class="form-control" name="cost_price"
						value=<?= $data->cost_price ?> required></label>
			</div>

			<div class="form-group">
				<label><?= __('Shape') ?>:<input type="text" class="form-control" name="shape" value=<?= $data->shape ?>
						required></label>
			</div>

			<div class="form-group">
				<label><?= __('Size') ?>:<input type="text" class="form-control" name="size" value=<?= $data->size ?>
						required></label>
			</div>

			<div class="form-group">
				<label><?= __('Optical Sun') ?>:<input type="text" class="form-control" name="optical_sun"
						value=<?= $data->optical_sun ?> required></label>
			</div>

			<div class="form-group">
				<label><?= __('Description') ?>:<textarea type="text" class="form-control"
						name="description"><?= $data->description ?></textarea></label>
			</div>

			<div class="form-group">
				<label><?= __('Quantity') ?>:<input type="text" class="form-control" name="quantity"
						value=<?= $data->quantity ?> required></label>
			</div>

			<div class="form-group">
				<label><?= __('Is Disabled') ?>:<input type="checkbox" id="disable" name="disable" value="1"></label>
			</div>

			<div class="form-group">
                <label><?= __('Image') ?>:<input type="file" class="form-control" name="image" /></label>
			</div>

			<div class="form-group">
				<input type="submit" name="action" value="<?= __('Modify Product') ?>" />
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