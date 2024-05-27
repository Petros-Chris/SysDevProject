<!DOCTYPE html>
<html>
<head>
	<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
	<h1>Input Frames Information</h1>
	<div class="container-admin">

		<form method='post' action='' enctype="multipart/form-data">
			<!-- <div class="form-group">
				<label>Brand:<input type="text" class="form-control" name="brand" /></label>
			</div> -->

			<label><?= __('Brand') ?>:<select name="brand" class="form-control">
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
				<label><?= __('Model') ?>:<input type="text" class="form-control" name="model" /></label>
			</div>

			<label><?= __('Color') ?>:<select name="color" class="form-control">
					<option value="Black"><?= __('Black') ?></option>
					<option value="Brown"><?= __('Brown') ?></option>
					<option value="Clear"><?= __('Clear') ?></option>
					<option value="Green"><?= __('Green') ?></option>
					<option value="Red"><?= __('Red') ?></option>
					<option value="Tortoise"><?= __('Tortoise') ?></option>
					<option value="White"><?= __('White') ?></option>
				</select></label>

			<div class="form-group">
				<label><?= __('Price To Manufacter') ?>:<input type="text" class="form-control"
						name="cost_price" /></label>
			</div>

			<label><?= __('Shape') ?>:<select name="shape" class="form-control">
					<option value="Aviator"><?= __('Aviator') ?></option>
					<option value="Cat eye"><?= __('Cat eye') ?></option>
					<option value="Geometric"><?= __('Geometric') ?></option>
					<option value="Oval"><?= __('Oval') ?></option>
					<option value="Round"><?= __('Round') ?></option>
					<option value="Rectangle"><?= __('Rectangle') ?></option>
					<option value="Square"><?= __('Square') ?></option>
				</select></label>

			<div class="form-group">
				<label><?= __('Size') ?>:<input type="text" class="form-control" name="size" /></label>
			</div>

			<label><?= __('Optical Sun') ?>:<select name="optical_sun" class="form-control">
					<option value="Optical"><?= __('Optical') ?></option>
					<option value="Sun"><?= __('Sun') ?></option>

				</select></label>

			<div class="form-group">
				<label><?= __('Description') ?>:<textarea type="text" class="form-control"
						name="description"> </textarea></label>
			</div>

			<div class="form-group">
				<label><?= __('Quantity') ?>:<input type="text" class="form-control" name="quantity"></input></label>
			</div>

			<div class="form-group">
                <label><?= __('Image') ?>:<input type="file" class="form-control" name="image" /></label>
            </div>

			<div class="form-group">
				<input type="submit" name="action" value="<?= __('Create Product') ?>" />
			</div>
		</form>
	</div>
</body>

</html>