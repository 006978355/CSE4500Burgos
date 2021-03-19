<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>

<-- Remove the block below when testing with VS Code or other IDEs -->
{block "style"}
        {"fonts"|style}
        {"main"|style}
{/block}
</head>

<body>
<div class="bg"></div>

<h1>SIMP - About</h1>

<div class="topnav">
  <a href="/">Main</a>
  <a href="about">About</a>
  <a class="active" href="login">Login</a>
</div>

<body>
<form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="classroom.jpg" alt="Avatar" class="avatar">
  </div>
  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Username" name="username" required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Password" name="password" required>
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  <div class="container" style="background-color:#3b93fd">
    <button type="button" class="createacctbtn">Create Account</button>
    <span class="password"><a href="#">Forgot password</a></span>
  </div>
</form>
</body>
</html>
