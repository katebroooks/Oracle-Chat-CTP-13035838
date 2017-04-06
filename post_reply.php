<?php session_start();
include_once 'connect.php';
include_once 'error_handling.php';
include_once 'html/header.html';
// if the unique id is not set or the category id is equivalent to nothing
// go to the signin page and exit the function
if ((!isset($_SESSION['uid'])) || ($_GET['cid'] == "")) {
	header("Location: signin2.php");
	exit();
}
$cid = $_GET['cid'];
$tid = $_GET['tid'];
?>
<!-- Start page -->
<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main" id="content-section">
<div class="login">
<div class="login-bottom">
<h2>Post Forum Reply</h2>
<?php
echo "<p>You are logged in as ".$_SESSION['username']." &bull; <a href='logout_parse.php'>Logout</a></p>";
?>
<!-- This page links to the post_reply_parse script which checks the user login status and makes queries to the sql database -->
</div>
</div>
<div id="content" class="content">
<!-- Create topic form -->
<form action="post_reply_parse.php" method="post">
	<p>Reply Content</p><hr />
	<textarea class="forum-textarea" name="reply_content" rows="5" cols="75"></textarea>
	<br /><br />
	<input type="hidden" name="cid" value="<?php echo $cid; ?>" />
	<input type="hidden" name="tid" value="<?php echo $tid; ?>" />
	<div class="forum-sub">
	<input type="submit" name="reply_submit" value="Post your reply..." />
</div>
</form>
</div><!-- End content -->
</div><!-- End content main -->
</div><!-- End page-wrapper -->
<?php
include('html/footer.html');
?>
