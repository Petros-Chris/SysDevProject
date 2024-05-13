<!DOCTYPE html>
<html>
<head>
	
<!-- <link rel="stylesheet" type="text/css" href="/app/css/style.scss"> -->
<link rel="stylesheet" type="text/css" href="/app/style.scss">
</head>
<body>

<div id="popup" class="popup">
  <p>You Have Sucessfully Logged Out 🤤</p>
</div>

<div class="login-container">
<h1>Sign in</h1>
  <form action="" method="POST">
    <input type="email" id="email" name="email" placeholder="Enter your email"><br>
    <input type="password" id="pwd" name="password" placeholder="Enter your password"><br>
    <input type="submit" value="Sign In">
	<div class="forgot-password">
      <a href="#">Forgot password?</a>
      <div class="divider"></div>
    </div>
    <div class="signup-link">
      <h4>Don't have an account?</h4>
      <button type="button" onclick="window.location.href = '/User/register'" class="signup-button">Sign up</button>
    </div>
  </form>
</div>

</body> 
</html>
