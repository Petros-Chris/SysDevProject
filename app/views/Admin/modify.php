<!DOCTYPE html>
<html>

<head>
	<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
	<h1 class="admin">Modify Frames</h1>
	<div class='container-admin'>


		<form method='post' action='' enctype="multipart/form-data">


			<?php
			$selectedColor = $data->color;
			$selectedBrand = $data->brand;
			$selectedShape = $data->shape;
			$selectedOpti_sun = $data->optical_sun;
			?>

			<label><?= __('Brand') ?>:<select name="brand" class="form-control">
					<option value="Boss" <?= $selectedBrand == 'Boss' ? 'selected' : '' ?>>Boss</option>
					<option value="Cartier" <?= $selectedBrand == 'Cartier' ? 'selected' : '' ?>>Cartier</option>
					<option value="Dexter Marx" <?= $selectedBrand == 'Dexter Marx' ? 'selected' : '' ?>>Dexter Marx
					</option>
					<option value="Gucci" <?= $selectedBrand == 'Gucci' ? 'selected' : '' ?>>Gucci</option>
					<option value="Oakley" <?= $selectedBrand == 'Oakley' ? 'selected' : '' ?>>Oakley</option>
					<option value="Oliver Peoples" <?= $selectedBrand == 'Oliver Peoples' ? 'selected' : '' ?>>Oliver
						Peoples
					</option>
					<option value="Prada" <?= $selectedBrand == 'Prada' ? 'selected' : '' ?>>Prada</option>
					<option value="Ray-Ban" <?= $selectedBrand == 'Ray-Ban' ? 'selected' : '' ?>>Ray-Ban</option>
				</select></label>

			<div class="form-group">
				<label><?= __('Model') ?>:<input type="text" class="form-control" name="model" value=<?= $data->model ?>></label>
			</div>

			<label><?= __('Color') ?>:<select name="color" class="form-control">
					<option value="Black" <?= $selectedColor == 'Black' ? 'selected' : '' ?>><?= __('Black') ?></option>
					<option value="Brown" <?= $selectedColor == 'Brown' ? 'selected' : '' ?>><?= __('Brown') ?></option>
					<option value="Clear" <?= $selectedColor == 'Clear' ? 'selected' : '' ?>><?= __('Clear') ?></option>
					<option value="Green" <?= $selectedColor == 'Green' ? 'selected' : '' ?>><?= __('Green') ?></option>
					<option value="Red" <?= $selectedColor == 'Red' ? 'selected' : '' ?>><?= __('Red') ?></option>
					<option value="Tortoise" <?= $selectedColor == 'Tortoise' ? 'selected' : '' ?>><?= __('Tortoise') ?>
					</option>
					<option value="White" <?= $selectedColor == 'White' ? 'selected' : '' ?>><?= __('White') ?></option>
				</select></label>

			<div class="form-group">
				<label><?= __('Price') ?>:<input type="text" class="form-control" name="cost_price"
						value=<?= $data->cost_price ?> required></label>
			</div>

			<label><?= __('Shape') ?>:<select name="shape" class="form-control">
					<option value="Aviator" <?= $selectedShape == 'Aviator' ? 'selected' : '' ?>><?= __('Aviator') ?>
					</option>
					<option value="Cat eye" <?= $selectedShape == 'Cat eye' ? 'selected' : '' ?>><?= __('Cat eye') ?>
					</option>
					<option value="Geometric" <?= $selectedShape == 'Geometric' ? 'selected' : '' ?>><?= __('Geometric') ?>
					</option>
					<option value="Oval" <?= $selectedShape == 'Oval' ? 'selected' : '' ?>><?= __('Oval') ?></option>
					<option value="Round" <?= $selectedShape == 'Round' ? 'selected' : '' ?>><?= __('Round') ?></option>
					<option value="Rectangle" <?= $selectedShape == 'Rectangle' ? 'selected' : '' ?>><?= __('Rectangle') ?>
					</option>
					<option value="Square" <?= $selectedShape == 'Square' ? 'selected' : '' ?>><?= __('Square') ?></option>
				</select></label>

			<div class="form-group">
				<label><?= __('Size') ?>:<input type="text" class="form-control" name="size" value=<?= $data->size ?>
						required></label>
			</div>

			<label><?= __('Optical Sun') ?>:<select name="optical_sun" class="form-control">
					<option value="Optical" <?= $selectedOpti_sun == 'Optical' ? 'selected' : '' ?>><?= __('Optical') ?>
					</option>
					<option value="Sun" <?= $selectedOpti_sun == 'Sun' ? 'selected' : '' ?>><?= __('Sun') ?></option>
				</select></label>

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