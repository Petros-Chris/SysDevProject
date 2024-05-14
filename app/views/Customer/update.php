<html>

<head>
	<title><?= $name ?> view</title>
</head>

<body>
	<div class='container'>
		<form method='post' action=''>

			<input type="text" name="first_name" placeholder="First Name" value='<?= $customer->first_name ?>'
				required />

			<input type="text" name="last_name" placeholder="Last Name" value='<?= $customer->last_name ?>' required />

			<input type="email" name="email" placeholder="Email" value='<?= $customer->email ?>' required />

			<!-- <input type="password" id="oldPass" name="oldPassword" placeholder="Old Password" required /> -->

			<input type="password" id="pass" name="password" placeholder="New Password" required />
			<span id="error1" style="color: red; display: none;">*</span>

			<input type="password" id="conPas" name="confirmPassword" placeholder="Confirm New Password" required />


			<div class="form-group">
				<input type="submit" name="action" value="Update" />
				<a href='/Customer/dashboard'>Cancel </a>
				<a href='/Customer/deactivate'>Deactivate</a>
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

		// Ajax thing might be needed here instead of this thing
		// var oldPassword = document.getElementById("oldPass");
		// if(<?= password_verify(oldPassword . value, $customer->password_hash) ?>)

		if (confirmPassword.value == password.value) {
			document.getElementById("registerForm").submit();
		} else {
			confirmPassword.setCustomValidity("Password does not match");
			password.setCustomValidity("Password does not match")
		}
	}
</script>