<!DOCTYPE html>
<html>
<head>
	<title><?= $name ?> view</title>
	<link rel="stylesheet" type="text/css" href="/app/css/style.scss">
</head>
<body id = "loginpage">

<div id="popup" class="popup">
  <p>You Have Sucessfully Logged Out 🤤</p>
</div>

<div class="login-form">
  <form  method="POST">
  <h1>Login</h1>
  <div class="form-input-material">
  <input type="email" id="email" name="email" class="form-control-material" placeholder="Email"  required/>
  </div>
  <div class="form-input-material">
  <input type="password" id="pwd" name="password" class="form-control-material" placeholder="Password"  required/>
  </div>
  <button type="submit" class="btn btn-primary btn-ghost">Login</button>
  <div class="forgot-password">
      <a href="#">Forgot password?</a>
      <div class="divider"></div>
    </div>
    <div class="signup-link">
      <h4 id = "account">Don't have an account?</h4>
      <button type="button" onclick="window.location.href = '/User/register'"  class="btn btn-primary btn-ghost">Sign up</button>
</div>
    </form>
</div>

</body> 
</html>
      
   