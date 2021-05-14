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

{block "content"}

<body>
      <form name="manageDevice" class="settings-form" action="/action_page.php" method="POST">
        <div class="manageSettings-cont">
          <h2>Under Development</h2>
        </div>

    <div><p class="text-error" data-validate="*"></p></div>

    <div class="clearfix2">
      <a href="https://www.simp.page/settings"><button type="button" class="cancel-btn">Cancel</button></a>
    </div>   
  </form>
</body>
{/block}
