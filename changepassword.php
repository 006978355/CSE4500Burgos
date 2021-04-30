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

{block "content"}

<!-- Change Password Form  -->
  <form name="changepassword" class="changepass-form" action="/action_page.php">
    <div class="changepass-cont">
      <h1>Change Password</h1>
      <p>Enter a new password that is between 8 and 40 characters long</p>
      <label for="new-password"><b>New Password</b></label>
      <input type="password" placeholder="Enter New Password" name="new-password" required>
      <label for="confirm-new-password"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="confirm-new-password" required>

    <div class="clearfix">
      <button type="submit" class="change-pass-btn">Update</button>
    </div>
   </div>
</form>
</body>
{/block}
