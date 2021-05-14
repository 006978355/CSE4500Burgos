<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>

<!-- <link rel="stylesheet" href="example.css"> -->
        
<!-- Uncomment the above and remove the block below when testing with VS Code -->
{block "style"}
        {"fonts"|style}
        {"main"|style}
{/block}

<body>
{block "content"}
<!-- Form for managing account  -->
      <form name="manage" class="manage-form" action="/manage" method="POST">
        <div class="manage-cont">
	  <div class="settings-head-cont"><h2>Manage Account</h2></div>
	  <p class="error"></p>
          <label for="password"><strong>Current Password (required)</strong></label>
          <input type="password" placeholder="Enter Current Password" name="current-password" required>
          <label for="settings-label"><strong>New Password</strong></label>
          <input type="password" placeholder="Enter New Password" name="new-password" required>
          <label for="settings-label"><strong>Confirm New Password</strong></label>
          <input type="password" placeholder="Confirm New Password" name="confirm-password" required>
        </div>

	<div><p class="text-error" data-validate="*"></p></div>
        
	<div class="clearfix2">
          <button name="submitChanges" value="1" type="submit" class="signup-btn">Submit</button>
          <a href="https://www.simp.page/settings"><button type="button" class="signup-btn">Cancel</button></a>
        </div>   
      </form>
</body>
{/block}
