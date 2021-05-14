{extends "site.php"}

<!-- Reference to the template document and formatted to work with Framework  -->

{block "content"}

<!-- Add Code Here -->
<div class="message-cont">

  <div class="inbox-btn-cont">
    <button onclick="document.getElementById('group').style.display='block'" class="newMessage"><i class="fa fa-plus"></i></button>
    <a href="https://www.simp.page/messages"><button class="newMessage"><i class="fa fa-user"></i></button></a>
  </div>

    <div class="inbox-cont inbox-left">
      <div class="inbox-border2">
	<div class="group-name"><strong>Group Name</strong></div>
      </div>
	<!-- <button onclick="document.getElementById('message').style.display='block'" class="newMessage"><i class="fa fa-plus"></i></button> -->
    </div>

    <div class="inbox-cont inbox-right">
	{* Send Messages  *}
	<div class="send-msg-cont">
	  <img class="sender-img" src="/img/avatar.jpg">
	    <div class="send-msg-text">This is to show what messages will look like</div>
	    <div class="send-msg-time">Date</div>
	</div>
	{* Receive Messages  *}
	<div class="receive-msg-cont">
	  <img class="receiver-img" src="/img/avatar.jpg">
	    <div class="receive-msg-text">Sending messages to and from the same person?? That seems weird..</div>
	    <div class="receive-msg-time">Date</div>
	</div>
	{* Compose  *}
	<div class="compose">
	  <input placeholder="Enter message here">
	  <button name="groupReply" value="1" type="submit" class="send-btn"><i class="fa fa-check"></i></button>
	</div>
      </div>
    </div>
</div>

  <!-- Send New Message Form  -->
<div id="group" class="message-modal">
  <form name="message" class="message-form" action="/messages" method="POST">
    <div class="message2-cont">
      <div class="message-head-cont"><h2>New Group Message</h2></div>
      <label for="user"><strong>Usernames</strong></label>
      <p class="info">Enter each username to add to the group. Use a comma to separate them</p>
      <input type="text" placeholder="ex: bob, ashley, martin" name="user" require><br><br>
      <label for="group"><strong>Group Name</strong></label>
      <p class="info">Create a name for your group</p>
      <input type="text" placeholder="Enter group name here" name="group" require><br><br>
      <label for="enterMessage"><strong>Compose First Message</strong></label><br><br>
      <textarea id="enterMessage" name="enterMessage" placeholder="Enter message here" rows="6" require></textarea>
      <!-- <input type="profile-text" placeholder="Enter New Bio" name="editBio"> -->
    </div>

    <div><p class="text-error" data-validate="*"></p></div>

    <!-- Submit and Cancel Button  -->
    <div class="clearfix">
      <button name="groupMessage" value="1" type="submit" class="message-btn">Submit</button>
      <button type="button" onclick="document.getElementById('group').style.display='none'" class="message-btn">Cancel</button>
    </div>
  <form>
</div>

<!-- Script to load the forms when users press the + Button  -->
<script>
var message_modal = document.getElementById('group');

window.onclick = function(event) {
  if (event.target == message) {
          message_modal.style.display = 'none';
  }
}
</script>
{/block}
