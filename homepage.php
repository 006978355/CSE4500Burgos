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
    
    <h1>SIMP - Homepage</h1>
    
    <div class="topnav">
        <a class="active" href="homepage">Home</a>
        <a href="profile">Profile</a>
        <a href="messages">Messages</a>
        <a href="settings">Settings</a>
        <div class="search-container">
        <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        </div>
    </div>
    <main>
        <header>
            <form class="compose">
                <textarea placeholder="Compose new Tweet..."></textarea>

                <div>
                    <span class="count">140</span>
                    <button>Send</button>
                </div>
            </form>
        </header>

        <div class="tweets">
            <div class="thread">
                <div class="tweet">
                    <img src="images/pfp.jpg">

                    <div class="body">
                        <div class="title">@3scobars</div>
                        <div class="message">Simps forver!!</div>
                    </div>
                </div>

                <div class="replies">
                    <form class="compose">
                        <textarea placeholder="Compose new Tweet..."></textarea>

                        <div>
                            <span class="count">140</span>
                            <button>Send</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="thread">
                <div class="tweet">
                    <img src="images/pfp.jpg">

                    <div class="body">
                        <div class="title">@3scobars</div>
                        <div class="message">Hey who wants to teach?</div>
                    </div>
                </div>

                <div class="replies">
                    <form class="compose">
                        <textarea placeholder="Compose new Tweet..."></textarea>

                        <div>
                            <span class="count">140</span>
                            <button>Send</button>
                        </div>
                    </form>

                    <div class="tweet">
                        <img src="images/chizuru.jpg">

                        <div class="body">
                            <div class="title">@ChizuruSenpai</div>
                            <div class="message">I do!</div>
                        </div>
                    </div>

                    <div class="tweet">
                        <img src="images/pfp.jpg">

                        <div class="body">
                            <div class="title">@3scobars</div>
                            <div class="message">sweet!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Handlebars Templates -->
    <script id="template-tweet" type="text/x-handlebars-template">
        <div class="tweet">
            <img src="images/{{ img }}">

            <div class="body">
                <div class="title">{{ handle }}</div>
                <div class="message">{{ message }}</div>
            </div>
        </div>
    </script>

    <script id="template-compose" type="text/x-handlebars-template">
        <div class="replies">
            <form class="compose">
                <textarea placeholder="Compose new Tweet..."></textarea>

                <div>
                    <span class="count">140</span>
                    <button>Send</button>
                </div>
            </form>
        </div>
    </script>

    <script id="template-thread" type="text/x-handlebars-template">
        <div class="thread">
            {{{ tweetTemplate }}}
            {{{ composeTemplate }}}
        </div>
    </script>

    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
    <script src="main.js"></script>

    </body>
</html>
