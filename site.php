<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>

{block "style"}
	{"fonts"|style}
	{"main"|style}
{/block}


{block "script"}
	{"main"|script}
{/block}
{block "code"}{/block}

<title>{block "title"}SIMP{/block}</title>
</head>

<body>

<!-- Top Image for entire website  -->
<div class="bg"></div>

<!-- Header for the  ntire website depending on if a user is signed in  -->
<div class="head-link">
{if Hologram\Authenticate\Auth::user()}
<a href="https://www.simp.page/homepage"><h1 class="main-header">SIMP</h1></a>
{else}
<a href="https://www.simp.page/"><h1 class="main-header">SIMP</h1></a>
{/if}
</div>

<!-- Main Navigation for entire site  -->
<div id="navigation" class="topnav">

	<!-- Only allow authenticated users to view these pages and use the search bar  -->	
	{if Hologram\Authenticate\Auth::user()}
	<a href="https://www.simp.page/homepage">Home</a>
	<a href="https://www.simp.page/profile">Profile</a>
	<a href="https://www.simp.page/messages">Messages</a>
	<a href="https://www.simp.page/settings">Settings</a>
	<a href="https://www.simp.page/logout">Logout</a>
        <div class="search-container">
       		<form action="/action_page.php">
       			<input type="text" placeholder="Search.." name="search">
       			<button type="submit"><i class="fa fa-search"></i></button>
       		</form>
       	</div>		
	{else}
	<!-- Sites accessible when logged out  -->
	<a href="https://www.simp.page/">Main</a>
	<a href="https://www.simp.page/about">About</a>
	<a href="https://www.simp.page/login">Login</a>
	{/if}

</div>


<!-- Dwoo block for headers  -->
{block "content"}
{/block}

{block "footer"}
<div id="footer" class="sitewide-footer">
	<footer>
	© <?php echo date('Y'); ?> SIMP. All Rights Reserved.
	<div class="sitewide-footer-ref">
	    <a href="/privacy.pdf">Privacy</a>
	    <a href="/terms.pdf">Terms and Conditions</a>
	    <a href="https://www.simp.page/support">Contact</a>	
	</div>
	</footer>
</div>
{/block}

</body>
</html>
