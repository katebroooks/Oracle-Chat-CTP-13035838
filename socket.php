<?php session_start();
include('html/header.html');
include('public/content/error_handling.php');
?>

<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main" id="content-section"><!-- Ajax would go here -->
<!--Socket--->
<script src="node_modules/socket.io-client/dist/socket.io.js"></script.
<script>
  $(function(){
    var socket = io.connect();
    var $messageForm = $('#messageForm');
    var $message = $('#message');
    var $chat = $('#chat');
    var $messageArea = $('#messageArea');
    var $userFormArea = $('#userFormArea');
    var $userForm = $('#userForm');
    var $users = $('#users');
    var $username = $('#username');

    $messageForm.submit(function(e){
      e.preventDefault();
      socket.emit('send message', $message.val());
      $message.val('');
    });

    socket.on('new message', function(data){
      $chat.append('<div class="well"><strong>'+data.user+'</strong> '+data.msg+'</div>');
    });

    $userForm.submit(function(e){
      e.preventDefault();
      socket.emit('new user', $username.val(), function(data){
        if(data){
          $userFormArea.hide();
          $messageArea.show();
        }
      });
      $username.val('');
    });

    socket.on('get users', function(data){
      var html = ''
      for(i = 0;i < data.length;i++){
        html += '<li class="list-group-item">'+data[i]+'</li>';
      }
      $users.html(html);
    });
  });
</script>
<!-- Socket.io -->
<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main" id="content-section"><!-- Ajax would go here -->
  <div class="container">
       <div id="userFormArea" class="row">
             <div class="col-md-8">
                    <form id="userForm">
                            <div class="form-group">
                                     <label>Enter Username</label>
                                     <input class="form-control" id="username" />
                                     <br>
                                     <input type="submit" class="btn btn-primary" value="Login" />
                            </div>
                    </form>
            </div>
         </div>
         <div id="messageArea" class="row">
               <div class="col-md-3">
                      <div class="well">
                              <h3>Online Users</h3>
                              <ul class="list-group" id="users"></div>
                      </div>
                </div>
        </div>

       <div class="col-md-6">
          <div class="chat" id="chat"></div>
          <form id="messageForm">
              <div class="form-group">
                  <label>Enter Message</label>
                  <textarea class="form-control" id="message"></textarea>
                  <br>
                  <input type="submit" class="btn btn-primary" value="Send Message" />
              </div>
          </form>
          </div>
        </div>
  </div>
</div>
</div>
<?php
include('html/footer.html');
?>
