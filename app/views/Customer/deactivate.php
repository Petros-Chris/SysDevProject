<html>
	<head>
		<title><?= $name ?> view</title>
	</head>
	<body>
		<div class='container'>
        	<h2>Are You Sure You Want To Disable Account?</h2>
			<form method='post' action=''>

				<div class="form-group">
					<label>Password:<input type="password" class="form-control" name="password"/></label>
				</div>

				<div class="form-group">
					<input type="submit" name="action" value="Deactivate"/> 
					<a href='/Customer/update'>Cancel</a>
				</div>
			</form>
		</div>
	</body>
</html>