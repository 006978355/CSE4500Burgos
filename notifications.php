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

<!-- Form for managing notifications  -->
      <form name="notifications" class="notifications-form" action="/notifications" method="POST">

        <div class="notifications-cont">
	  <div class="settings-head-cont"><h2>Manage Notifications</h2></div>
	  <p class="error"></p>
          <p class="success"></p>
          <div class="notification-cont">
            <label for="settings-label">Enable Post Notifications?</label>
            <label class="switch">
              <input type="checkbox" name="postNot" value="1">
              <span class="slider round"></span>
            </label><br><br>
            <label for="settings-label">Enable Message Notifications?</label>
            <label class="switch">
              <input type="checkbox" name="messageNot" value="1">
              <span class="slider round"></span>
            </label><br><br>
            <label for="settings-label">Enable Follower Notifications?</label>
            <label class="switch">
              <input type="checkbox" name="followerNot" value="1">
              <span class="slider round"></span>
            </label><br><br>
            <label for="settings-label">Enable Announcement Notifications?</label>
            <label class="switch">
              <input type="checkbox" name="announceNot" value="1">
              <span class="slider round"></span>
            </label><br>
          </div>
	</div>

    <div><p class="text-error" data-validate="*"></p></div>

    <div class="clearfix2">
      <button name="submitNotifications" value="1" type="submit" class="submit-btn">Submit</button>
      <a href="https://www.simp.page/settings"><button type="button" class="submit-btn">Cancel</button></a>
    </div>   
    </form>
</body>
{/block}
