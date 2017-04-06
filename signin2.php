<?php session_start();
include('html/header.html');
include('error_handling.php');
?>
<!-- Start signin 2 -->
<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main">
<!-- Log in form -->
<div class="login">
<div class="login-bottom">
 <h2>Login</h2>
 <! --
 Once the form has been submitted,
the login_parse script is intiated which checks the users details against those in the database
 if they are correct, the session state and unique id is set. If not the user is presented with
 invalid login information -->
  <?php
  if (!isset($_SESSION['uid'])) {
  echo "<form action='login_parse.php' method='post'>
  <div class='col-md-6'>
    <div class='login-mail'>
      <input type='text' name='username' placeholder='Username or Email' required=''>
      <i class='fa fa-envelope'></i>
    </div>
    <div class='login-mail'>
      <input type='password' name='password' placeholder='Password' required='' />
      <i class='fa fa-lock'></i>
    </div>
       <a class='forgot-checkbox' href='#'>
         <label class='checkbox1'><input type='checkbox' name='checkbox'><i></i>Forget Password</label>
       </a>
  </div>
  <div class='col-md-6 login-do'>
    <label class='hvr-shutter-in-horizontal login-sub'>
      <input type='submit' name='submit' value='Log in' />
    </label>
      <p>Do not have an account?</p>
    <a href='#' class='hvr-shutter-in-horizontal login-sub'>Signup</a>
  </div>
  <div class='clearfix'></div>
  </form>";
  } else {
  echo "<p>You are logged in as ".$_SESSION['username']." &bull; <a href='logout_parse.php'>Logout</a>";
  }
  ?>
</div>
</div>
</div><!-- End content-main -->
</div><!-- End page-wrapper -->
<?php
include('html/footer.html');
?>
