<?php session_start();
include('html/header.html');
?>

<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main" id="content-section">
<!--Start forum 2-->
<div class="content-top">
	<div class="banner">
	<!-- Fetch categories from MySQL database table by category_title in ascending order -->
	  <?php
	  require_once 'connect.php';
	  $sql = "SELECT * FROM categories ORDER BY category_title ASC";
	  $res = mysqli_query($con,$sql) or die(mysqli_error($con));
	  $categories = "";
	  if (mysqli_num_rows($res) > 0) {
	  	while ($row = mysqli_fetch_assoc($res)) {
	  		$id = $row['id'];
	  		$title = $row['category_title'];
	  		$description = $row['category_description'];
	  		$categories .= "<a href='view_category.php?cid=".$id."' class='cat_links'>".$title." - <font size='-1'>".$description."</font></a>";
	  	}
	  	echo $categories;
	  } else {
	  echo "<p>There are not categories available yet.</p>";
	  }
	  ?>
	 </banner>
<!-- End forum 2 -->
</div><!-- End banner -->
</div><!-- End content-top -->



</div>
</div>

<?php
include('html/footer.html');
?>
