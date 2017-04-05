<?php session_start();
include('html/header.html');
include('error_handling.php');
?>

<!-- Start signin 2 -->
<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main">
<!-- Log in form -->
<div class="login-bottom">
 <h2>Login</h2>

  <?php
  if (!isset($_SESSION['uid'])) {
  echo "<form action='login_parse.php' method='post'>
  Username: <input type='text' name='username' />&nbsp;
  <br />
  Password: <input type='password' name='password' />&nbsp;
  <input type='submit' name='submit' value='Log In' />
  ";
  } else {
  echo "<p>You are logged in as ".$_SESSION['username']." &bull; <a href='logout_parse.php'>Logout</a>";
  }
  ?>
</div>
<!-- End login form -->
<div class="content-box">
<?php include_once('connect.php');
$cid = $_GET['cid'];
$tid = $_GET['tid'];
$sql = "SELECT * FROM topics WHERE category_id='".$cid."' AND id='".$tid."' LIMIT 1";
$res = mysqli_query($con,$sql) or die(mysqli_error($con));
if (mysqli_num_rows($res) == 1) {
  echo "<table class='table' width='60%'>";
  if (isset($_SESSION['uid'])) {
    echo "<tr class='table-row'><td class='table-text' colspan='2'><div class='forum-sub'><input type='submit' value='Add Reply' onClick=\"window.location = 'post_reply.php?cid=".$cid."&tid=".$tid."'\" /></div>"; } else { echo "<tr class='table-row'><td class='table-text' colspan='2'><p>Please log in to add your reply.</p></td></tr>"; }
  while ($row = mysqli_fetch_assoc($res)) {
    $sql2 = "SELECT * FROM posts WHERE category_id='".$cid."' AND topic_id='".$tid."'";
    $res2 = mysqli_query($con,$sql2) or die(mysqli_error($con));
    while ($row2 = mysqli_fetch_assoc($res2)) {
      echo "<tr class='table-row'><td class='table-text' valign='top'><div style='min-height: 125px;'>".$row['topic_title']."<br />by ".$row2['post_creator']." - ".$row2['post_date']."<hr />".$row2['post_content']."</div></td><td class='table-text' width='200' valign='top' align='center' style'border: 1px solid #fff;'>User Info Here</td></tr><tr class='table-row'><td class='table-text' colspan='2'></td></tr>";
    }
    $old_views = $row['topic_views'];
    $new_views = $old_views + 1;
    $sql3 = "UPDATE topics SET topic_views='".$new_views."' WHERE category_id='".$cid."' AND id='".$tid."' LIMIT 1";
    $res3 = mysqli_query($con,$sql3) or die(mysqli_error($con));
  }
} else {
  echo "<p>This topic does not exist.</p>";
}
 ?>
<!-- End signin 2 -->
</div><!-- End content box -->
</div><!-- End content-main -->
</div><!-- End page-wrapper -->

<?php
include('html/footer.html');
?>
