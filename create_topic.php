<!-- Security if user not logged in no access to content-->
<?php session_start();
include_once 'connect.php';
include_once 'error_handling.php';
include_once 'html/header.html';
if ((!isset($_SESSION['uid'])) || ($_GET['cid'] == "")) {
	header("Location: signin2.php");
	exit();
}
$cid = $_GET['cid'];
?>
<!-- Start page -->
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
<div class="col-md-6">
<div class="content">
<form class="form" action="create_topic_parse.php" method="post">
<p>Topic Title</p>
<input type="text" name="topic_title" size="98" maxlength="150" />
<p>Topic Content</p>
<textarea class="forum-textarea" name="topic_content" rows="5" cols="75"></textarea>
<br /><br />
<div class="col-md-2 forum-sub">
<input type="hidden" name="cid" value="<?php echo $cid; ?>" />
<input type="submit" name="topic_submit" value="Create your topic" />
</div>
</form>
</div><!-- End content -->
</div><!-- End content main -->
</div><!-- End page-wrapper -->
</div>
</div>
<?php
include('html/footer.html');
?>
