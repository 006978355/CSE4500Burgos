<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>

<!-- <link rel="stylesheet" href="example.css"> -->
        
<!-- Uncomment the above and remove the block below when testing with VS Code -->
{block "style"}
        {"fonts"|style}
        {"main"|style}
{/block}

{block "content"}

<body>
<!-- Sign Up Modal and Form Form  -->
  <form name="signup" class="signup-form" method="POST">
    <div class="signup-cont">
      <!-- Signup field, enter username, password and confirm password  -->
      <h1>Sign Up</h1>
      <p>Please enter the following information to create an account</p>
      <label for="username"><b>First Name</b></label>
      <input type="login-text" placeholder="Enter First Name" name="firstName" required>
      <label for="username"><b>Last Name</b></label>
      <input type="login-text" placeholder="Enter Last Name" name="lastName" required>
      <label for="username"><b>Username</b></label>
      <input type="login-text" placeholder="Enter Username" name="username" required>
      <label for="email"><b>Email</b></label>
      <input type="login-text" placeholder="Enter Email" name="email" required>
      <label for="password"><b>Password</b></label>
      <input id="password" type="password" placeholder="Enter Password" name="password" required>
      <label for="password"><b>Confirm Password</b></label>
      <input id="password" type="password" placeholder="Confirm Password" name="confirm-password" required>

      <!-- Terms and Conditions  -->
      <div class="terms-checkbox">
        <input id="checkbox" type="checkbox" required>
        <label for="checkbox">I agree to the <a href="#">Terms and Conditions</a></label>
    </div>

    <div>
      <p class="text-error" data-hologram-validation-error="*"></p>
    </div>
    <div class="clearfix">
      <button type="submit" class="signup-btn">Sign Up</button>
      <a href="login"><button type="button" class="cancel-btn">Cancel</button></a>
    </div>   
  </div>
</form>
</body>
{/block}
