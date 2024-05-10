<html>
<head>
	<title><?= $name ?> view</title>
</head>
<body>
	<div class='container'>
		<form id="registerForm" method='post' onsubmit="validateForm(event)">
			<div class="form-group">
				<label>First Name:<input type="text" class="form-control" name="first_name" required/></label>
			</div>

			<div class="form-group">
				<label>Last Name:<input type="text" class="form-control" name="last_name" required/></label>
			</div>

			<div class="form-group">
				<label>Email:<input type="email" class="form-control" name="email" required/></label>
			</div>

			<div class="form-group">
				<label>Password:<input type="password" id="pass" class="form-control" name="password" required/></label>
				<span id="error1" style="color: red; display: none;">*</span>
			</div>

			<div class="form-group">
				<label>Confirm Password:<input type="password" id="conPas" class="form-control" name="confirmPassword" required/></label>
			</div>

			<div class="form-group">
				<input type="submit" name="action" value="Register"/> 
				<a href='/User/login'>I have an account, bring me to the login page</a>
			</div>
		</form>
	</div>
</body>
</html>
<script>

function validateForm(event) {
	event.preventDefault();

    var confirmPassword = document.getElementById("conPas");
	var password = document.getElementById("pass");

	if(confirmPassword.value == password.value) {
		document.getElementById("registerForm").submit();
	} else {
		confirmPassword.setCustomValidity("Password does not match");
		password.setCustomValidity("Password does not match")
	}
}
</script>