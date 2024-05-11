<html>

<head>
    <title><?= $name ?> view</title>
</head>

<body>
    <div class="login-container">
        <h1>New Employee</h1>
        <form id="registerForm" method='post'>
            <input type="text" name="first_name" placeholder="First Name" required />

            <input type="text" name="last_name" placeholder="Last Name" required />

            <input type="email" name="email" placeholder="Email" required />

            <input type="password" id="pass" name="password" placeholder="Password" required />
            <span id="error1" style="color: red; display: none;">*</span>

            <input type="submit" name="action" value="Register" />

            <button type="button" onclick="window.location.href = '/Admin/index'" class="signup-button">Go Back</button>
        </form>
    </div>
</body>

</html>