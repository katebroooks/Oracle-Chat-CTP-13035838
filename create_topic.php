<!-- Security if user not logged in no access to content-->
<?php session_start();
include_once 'connect.php';
include_once 'error_handling.php';
include_once 'html/header.html';
// If session with unique ID is not set, take to signin page
if ((!isset($_SESSION['uid'])) || ($_GET['cid'] == "")) {
	header("Location: signin2.php");
	exit();
}
$cid = $_GET['cid'];
?>
<!-- Start create forum form -->
<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main" id="content-section">
<div class="login">
<div class="login-bottom">
<h2>Create Forum Topic</h2>
<?php
echo "<p>You are logged in as ".$_SESSION['username']." &bull; <a href='logout_parse.php'>Logout</a></p>";
?>
</div>
<!-- Create topic form -->
<div class="content">
<form action="create_topic_parse.php" method="post">
<p>Topic Title</p><hr />
<input type="text" name="topic_title" size="76" maxlength="150" /><br /><br />
<p>Topic Content</p>
<textarea class="forum-textarea" name="topic_content" rows="5" cols="75"></textarea>
<br /><br />
<input type="hidden" name="cid" value="<?php echo $cid; ?>" />
<div class="forum-sub">
<input type="submit" name="topic_submit" value="Create your topic" />
</div>
</div>
</form>
</div>
</div><!-- End content -->
</div><!-- End content main -->
<?php
include('html/footer.html');
?>
