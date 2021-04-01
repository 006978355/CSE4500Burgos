<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>

<-- <link rel="stylesheet" href="login.css"> -->
        
<-- Uncomment the above and remove the block below when testing with VS Code -->
{block "style"}
        {"fonts"|style}
        {"main"|style}
{/block}
</head>

<body>
<div class="bg"></div>

<div class="head-link">
<a href="/"><h1 class="main-header">SIMP - Login</h1></a>
</div>
  
<div class="topnav">
  <a href="/">Main</a>
  <a href="about">About</a>
  <a class="active" href="login">Login</a>
</div>

<div class="img-cont">
  <img src="/img/avatar.jpg" alt="Avatar" class="avatar">
</div>

<form>
  <div class="login-cont">
    <label for="username"><b>Username</b></label>
    <input id="username "type="username" placeholder="Username" name="username" required>
  </div>
  <div class="login-cont">
    <label for="password"><b>Password</b></label>
    <input id="password" type="password" placeholder="Password" name="password" required>
  </div>
  <div class="create-cont">
    <button type="submit" class="login-btn">Login</button>
  </div>
</form>

<div class="create-cont">
  <button onclick="document.getElementById('signup').style.display='block'" type="button" class="createacct-btn">Create Account</button>
  <button onclick="document.getElementById('forgotpass').style.display='block'" type="button" class="forgotpass-btn">Forgot password</button>
</div>

<div id="signup" class="signup-modal">
  <span onclick="document.getElementById('signup').style.display='none'" class="login-close" title="Close">&times;
  </span>
  <form class="signup-form" action="/action_page.php">
    <div class="signup-cont">
      <h1>Sign Up</h1>
      <p>Please enter the following information to create an account</p>
      <label for="username"><b>Username</b></label>
      <input type="login-text" placeholder="Enter Username" name="username" required>
      <label for="email"><b>Email</b></label>
      <input type="login-text" placeholder="Enter Email" name="email" required>
      <label for="password"><b>Password</b></label>
      <input id="password" type="password" placeholder="Enter Password" name="password" required>
      <label for="password"><b>Confirm Password</b></label>
      <input id="password" type="password" placeholder="Confirm Password" name="confirm-password" required>
      
      <div class="terms-checkbox">
        <input id="checkbox" type="checkbox" required>
        <label for="checkbox">I agree to the <a href="#">Terms and Conditions</a></label>
    </div>
    <div class="clearfix">
      <button type="submit" class="signup-btn">Sign Up</button>
      <button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancel-btn">Cancel</button>
    </div>
   </div>
</form>
</div>

<div id="forgotpass" class="forgotpass-modal">
  <span onclick="document.getElementById('forgotpass').style.display='none'" class="login-close" title="Close">&times;
  </span>
  <form class="forgotpass-form" action="/action_page.php">
    <div class="forgotpass-cont">
      <h1>Forgot Password</h1>
      <p>Enter the following information to recover your account</p>
      <label for="email"><b>Email</b></label>
      <input type="login-text" placeholder="Enter Email" name="email" required>
      

    <div class="clearfix">
      <button type="submit" class="recovery-btn">Recover</button>
      <button type="button" onclick="document.getElementById('forgotpass').style.display='none'" class="cancel-btn">Cancel</button>
    </div>
   </div>
</form>
</div>

<script>
var signup-modal = document.getElementById('signup');
var forgotpass-modal = document.getElementById('forgotpass');

window.onclick = function(event) {
  if (event.target == signup-modal) {
    signup-modal.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target == forgotpass-modal) {
    forgotpass-modal.style.display = "none";
  }
}
</script>
</body>
</html>
