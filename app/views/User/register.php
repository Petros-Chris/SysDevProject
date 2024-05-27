<html>

<head>
	<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
	<div class="login-form">
	<h1>Sign Up</h1>
		<form id="registerForm" method='post' onsubmit="validateForm(event)">
		<div class="form-input-material">
			<input type="text" name="first_name" class="form-control-material" placeholder="First Name" required />
			</div>

			<div class="form-input-material">
			<input type="text" name="last_name" class="form-control-material" placeholder="Last Name" required /> 
			</div>

			<div class="form-input-material">
			<input type="email" name="email" class="form-control-material" placeholder="Email" required />
			</div>

			<div class="form-input-material">
			<input type="password" id="pass" name="password" class="form-control-material" placeholder="Password" required />
			<span id="error1" style="color: red; display: none;">*</span>
			</div>
			
			<div class="form-input-material">
			<input type="password" id="conPas" name="confirmPassword" class="form-control-material" placeholder="Confirm Password" 
					required />
					</div>

			<button type="submit" name="action" class="btn btn-primary btn-ghost" >Register </button>

			<button type="button" onclick="window.location.href = '/User/login'" class="btn btn-primary btn-ghost">Log In</button>
	</form>
	</div>
</body>

</html>
<script>

	function validateForm(event) {
		event.preventDefault();

		var confirmPassword = document.getElementById("conPas");
		var password = document.getElementById("pass");

		if (confirmPassword.value == password.value) {
			document.getElementById("registerForm").submit();
		} else {
			confirmPassword.setCustomValidity("Password does not match");
			password.setCustomValidity("Password does not match")
		}
	}
</script>