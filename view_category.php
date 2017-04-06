<?php session_start();
include('html/header.html');
include('error_handling.php');
?>
<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main" id="content-section">
<div class="login">
<div class="login-bottom">
<h2>View Categories</h2>
<!-- Ensuring session is set for security -->
<?php
if (!isset($_SESSION['uid'])) {
echo "<form action='login_parse.php' method='post'>
Username: <input type='text' name='username' />&nbsp;
<br />
Password: <input type='password' name='password' />&nbsp;
<input type='submit' name='submit' value='Log In' />
";
} else {
echo "<p>You are logged in as ".$_SESSION['username']." &bull; <a href='logout_parse.php'>Logout</a></p>";
}
?>
<hr />
<!-- Get request to server for category -->
<?php
include_once('connect.php');
$cid = $_GET['cid'];
$topics = "";
$logged = "";
// if session id is set,create link, if not please log in
if (isset($_SESSION['uid'])) {
	$logged = " | <a href='create_topic.php?cid=".$cid."'>Click to create new topic.</a>";
} else {
	$logged = " | Please log in to create topics in this forum";
}
$sql = "SELECT id FROM categories WHERE id='".$cid."' LIMIT 1";
$res = mysqli_query($con,$sql) or die(mysqli_error($con));
if (mysqli_num_rows($res) == 1) {
$sql2 = "SELECT * FROM topics WHERE category_id='".$cid."' ORDER BY topic_reply_date DESC";
$res2 = mysqli_query($con,$sql2) or die(mysqli_error($con));
// Fill the html table with variables defined above pulling in data
// from the categories and topics tables
if (mysqli_num_rows($res2) > 1) {
	$topics .= "<table width='100%' style='border-collapse: collapse;'>";
	$topics .= "<tr><td colspan='3'><a href='signin.php'>Return to Dashboard</a>".$logged."<hr /></td></tr>";
	$topics .= "<tr style='background-color: #fff;'><td>Topic Title</td><td width='65' align='center'>Replies</td><td width='65' align='center'>Views</td></tr>";
	$topics .= "<tr><td colspan='3'><hr /></td></tr>";
	while ($row = mysqli_fetch_assoc($res2)) {
		$tid = $row['id'];
		$title = $row['topic_title'];
		$views = $row['topic_views'];
		$date = $row['topic_date'];
		$creator = $row['topic_creator'];
		$topics .= "<tr><td><a href='view_topic.php?cid=".$cid."&tid=".$tid."'>".$title."</a><br /><span class ='post_info'>Posted by: ".$creator." on ".$date."</span></td><td align='center'>0</td><td align='center'>".$views."</td></tr>";
		$topics .= "<tr><td colspan='3'><hr /></td></tr>";
	}
	$topics .= "</table>";
	echo $topics;
} else {
	echo "<a href='signin2.php'>Return to Signin</a><hr />";
	echo "<p>There are no topics in this category yet.".$logged."</p>";
}
} else {
	echo "<a href='signin2.php'>Return to sign in</a><hr />";
	echo "<p>You are trying to view a category that does not exist yet.</p>";
}
?>
</div><!-- End login bottom -->
</div><!-- End content main -->
</div>
</div>
<?php
include_once('html/footer.html');
?>
