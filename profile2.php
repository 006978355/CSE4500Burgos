<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>

<-- <link rel="stylesheet" href="profile.css"> -->
        
<-- Uncomment the above and remove the block below when testing with VS Code -->
{block "style"}
        {"fonts"|style}
        {"main"|style}
{/block}
</head>

<body>
<div class="bg"></div>

<div class="head-link">
<a href="/"><h1 class="main-header">SIMP - Profile</h1></a>
</div>

<div class="topnav">
  <a href="homepage">Home</a>
  <a class="active" href="profile">Profile</a>
  <a href="messages">Messages</a>
  <a href="settings">Settings</a>
  <a href="#logout">Logout</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
    <main>
      <br>
        <div>
          <textarea name="name" id="name" placeholder="Student Name"></textarea>
      </div>
    
      <div>
          <img height="100" width="100" src="avatar.jpg" alt="avatar">
      </div>
       <br>
       <div> 
            <h2>Posts</h2>
            <textarea name="Posts" id="Posts" placeholder="Write Something..."></textarea>
        </div>
        
    </main>
    <footer>
        <button>post</button>
    </footer>
</body>
</html>
