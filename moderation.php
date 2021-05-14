<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>

<!-- <link rel="stylesheet" href="./about.css"> -->
        
<!-- Uncomment the above and remove the block below when testing with VS Code -->
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
   <a href="messages">Messages</a>
   <a class="active" href="moderation">Moderation</a>
   <a href="#logout">Logout</a>
   <div class="search-container">
      <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
</div>

<div class="review-cont">
        
   <table id="spacing">
   <tr>
     <th>Inappropriate Post Content:</th>
</tr>

<table id="posts">
  <tr>
    <th>User Reported</th>
    <th>User that Reported It</th>
    <th>Reason</th>
    <th>Post ID</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>username</td>
    <td>username</td>
    <td>offensive</td>
    <td>##########</td>
    <td><button class="accept button5">Accept</button>  <button class="deny button5">Deny</button>  <button class="ban button5">Ban</button></td>
  </tr>

<table id="spacing">
   <tr>
     <th>  </th>
   </tr>
   <tr>
     <th>Inappropriate Comment Content:</th>
</tr>

<table id="comment">
  <tr>
    <th>User Reported</th>
    <th>User that Reported It</th>
    <th>Reason</th>
    <th>Comment Location</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>username</td>
    <td>username</td>
    <td>offensive</td>
    <td>##########</td>
    <td><button class="accept button5">Accept</button>  <button class="deny button5">Deny</button>  <button class="ban button5">Ban</button></td>
  </tr> 

<table id="spacing">
    <tr>
     <th>  </th>
   </tr>
   <tr>
     <th>Inappropriate Message Content:</th>
</tr>

<table id="message">
  <tr>
    <th>User Reported</th>
    <th>User that Reported It</th>
    <th>Reason</th>
    <th>Message Location</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>username</td>
    <td>username</td>
    <td>offensive</td>
    <td>##########</td>
    <td><button class="accept button5">Accept</button>  <button class="deny button5">Deny</button>  <button class="ban button5">Ban</button></td>
  </tr>

<table id="spacing">
    <tr>
     <th>  </th>
   </tr>
   <tr>
     <th>Inappropriate Group Message Content:</th>
</tr>

<table id="groupmessage">
  <tr>
    <th>User Reported</th>
    <th>User that Reported It</th>
    <th>Reason</th>
    <th>Group Message Location</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>username</td>
    <td>username</td>
    <td>offensive</td>
    <td>##########</td>
    <td><button class="accept button5">Accept</button>  <button class="deny button5">Deny</button>  <button class="ban button5">Ban</button></td>
  </tr>
</div>
    
</body>
</html>
