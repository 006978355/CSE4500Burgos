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
{block "content"}

<!-- Forgot Password Modal and Form  -->
  <form name="recover" class="forgotpass-form" method="POST">
    <div class="forgotpass-cont">
      <h1>Forgot Password</h1>
      <p>Enter the following information to recover your account</p>
      <label for="email"><b>Email</b></label>
      <input type="login-text" placeholder="Enter Email" name="email" required>


    <div class="clearfix">
      <button type="submit" class="recovery-btn">Recover</button>
      <a href="login"><button type="button" class="cancel-btn">Cancel</button></a>
    </div>
   </div>
</form>
</body>
{/block}
