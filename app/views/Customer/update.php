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
				<label>First Name:<input type="text" class="form-control" name="first_name" value='<?= $data->first_name ?>'/></label>
			</div>

			<div class="form-group">
				<label>Last Name:<input type="text" class="form-control" name="last_name" value='<?= $data->last_name ?>'/></label>
			</div>

			<div class="form-group">
				<label>Email:<input type="text" class="form-control" name="email" value='<?= $data->email ?>'/></label>
			</div>

			<div class="form-group">
				<label>Password:<input type="password" class="form-control" name="password"/></label>
			</div>

			<div class="form-group">
				<input type="submit" name="action" value="Update"/> 
				<a href='/User/login'>Cancel</a>
			</div>
		</form>
	</div>
</body>
</html>