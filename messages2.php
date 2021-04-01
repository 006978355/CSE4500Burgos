<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>

<-- <link rel="stylesheet" href="./about.css"> -->
        
<-- Uncomment the above and remove the block below when testing with VS Code -->
{block "style"}
        {"fonts"|style}
        {"main"|style}
{/block}
</head>

<body>
<div class="bg"></div>
        
<div class="head-link">
<a href="/"><h1 class="main-header">SIMP - Messages</h1></a>
</div>

<div class="topnav">
   <a href="homepage">Home</a>
   <a href="profile">Profile</a>
   <a class="active" href="messages">Messages</a>
   <a href="settings">Settings</a>
   <a href="#logout">Logout</a>
   <div class="search-container">
      <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
</div>
</body>
</html>
