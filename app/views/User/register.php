<html>
<head>
	<title><?= $name ?> view</title>
</head>
<body>
	<div class='container'>
		<form method='post' action=''>
			<div class="form-group">
				<label>First Name:<input type="text" class="form-control" name="first_name"/></label>
			</div>

			<div class="form-group">
				<label>Last Name:<input type="text" class="form-control" name="last_name"/></label>
			</div>

			<div class="form-group">
				<label>Email:<input type="email" class="form-control" name="email"/></label>
			</div>

			<div class="form-group">
				<label>Password:<input type="password" class="form-control" name="password"/></label>
			</div>

			<div class="form-group">
				<input type="submit" name="action" value="Register"/> 
				<a href='/User/login'>I have an account, bring me to the login page</a>
			</div>
		</form>
	</div>
</body>
</html>