<!DOCTYPE html>
<html>
<head>
	<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>

<body>
    <div class="login-form">
        <h1><?= __('New Employee') ?></h1>
        <form id="registerForm" method='post'>
        <div class="form-input-material">
            <input type="text" name="first_name"class="form-control-material"  placeholder="First Name" required />
        </div>

        <div class="form-input-material">
            <input type="text" name="last_name" class="form-control-material" placeholder="Last Name" required />
            </div>

            <div class="form-input-material">
            <input type="email" name="email" class="form-control-material" placeholder="Email" required />
            </div>

            <div class="form-input-material">
            <input type="password" id="pass"class="form-control-material"  name="password" placeholder="Password" required />
            </div>

            <span id="error1" style="color: red; display: none;">*</span>
            <div class="form-input-material">
            <input type="submit" name="action" class="btn btn-primary btn-ghost" value="Register" />
            </div>
            
            <button type="button" onclick="window.location.href = '/Admin/index'"
            class="btn btn-primary btn-ghost"><?= __('Go Back') ?></button>
        </form>
    </div>
</body>

</html>