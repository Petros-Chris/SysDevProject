<html>

<head>
	<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
	<div class="login-container">
	<h1>Sign Up</h1>
		<form id="registerForm" method='post' onsubmit="validateForm(event)">
			<input type="text" name="firstname" placeholder="First Name" required />

			<input type="text" name="lastname" placeholder="Last Name" required /> 

			<input type="email" name="email" placeholder="Email" required />

			<input type="password" id="pass" name="password" placeholder="Password" required />
			<span id="error1" style="color: red; display: none;">*</span>

			<input type="password" id="conPas" name="confirmPassword" placeholder="Confirm Password" 
					required />

			<input type="submit" name="action" value="Register" />

			<button type="button" onclick="window.location.href = '/User/login'" class="signup-button">Log In</button>
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