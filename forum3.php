<!DOCTYPE HTML>
<html>
<head>
<title>Oracle-Chat Application</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--<link href="css/main.css" rel='stylesheet' type='text/css' />-->
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/jquery.min.js"> </script>
<script src="js/Chart.js"></script>


<!-- Scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/general.js"></script>

<link href="css/navbar-mqs.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito|Overpass" rel="stylesheet">
<script src="js/custom.js"></script>

<script src="js/screenfull.js"></script>
<!-- Simple wrapper for cross-browser usage of the JavaScript Fullscreen API https://sindresorhus.com/screenfull.js -->
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}



			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});



		});
		</script>
</head>
<body>
<div id="wrapper">

<!-- Navigation --->
        <nav class="navbar-default navbar-static-top" role="navigation">

             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand logo" href="index.html"><img src="images/logo.png" alt="logo"></a>
			   </div>

			<div class="border-bottom">
        	<div class="full-left">
            <div class="navbar-search is-hidden">
			<form action="#0">
				<input type="search" placeholder="Search...">
			</form>
	    	</div>
            <div class="clearfix"> </div>
           </div>

		   <!-- Toggling -->
		    <div class="drop-menu">
		        <ul class="nav_1" id="side-menu">

		    		<li class="dropdown at-drop">
		              <a href="" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i><span class="number">2</span></a>
		              <ul class="dropdown-menu menu1 " role="menu">
		                <li><a href="">

		                	<div class="user-new">
		                	<p>New user registered</p>
		                	<span>40 seconds ago</span>
		                	</div>
		                	<div class="user-new-left">

		                	<i class="fa fa-user-plus"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                	</a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>Someone special liked this</p>
		                	<span>3 minutes ago</span>
		                	</div>
		                	<div class="user-new-left">

		                	<i class="fa fa-heart"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>John cancelled the event</p>
		                	<span>4 hours ago</span>
		                	</div>
		                	<div class="user-new-left">

		                	<i class="fa fa-times"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>The server is status is stable</p>
		                	<span>yesterday at 08:30am</span>
		                	</div>
		                	<div class="user-new-left">

		                	<i class="fa fa-info"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>New comments waiting approval</p>
		                	<span>Last Week</span>
		                	</div>
		                	<div class="user-new-left">

		                	<i class="fa fa-rss"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#" class="view">View all messages</a></li>
		              </ul>
		            </li>

					<div class="dropdown top-menu-row">
						<li>
		              		<a data-target="#" href="" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class="name-caret">Account</span></a>
					  		<ul class="dropdown-menu" role="menu">
		                		<li><a href="#">Support</a></li>
								<li><a href="inbox">Inbox</a></li>
								<li><a href="#">Calander</a></li>
								<li><a href="#">Tasks</a></li>
							</ul>
						</li>
					</div>
		        </ul>

		    </div><!-- /.navbar-collapse -->
			 		<div class="clearfix"></div>
			 </div>

		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="content/index.php" class="hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="topics" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i><span class="nav-label">Topics</a>
                    </li>
                    <li>
                        <a href="inbox" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i><span class="nav-label">Inbox</span><span class="count">30</span></a>
                    </li>
                    <li>
                        <a href="forum" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i><span class="nav-label">Forum</span></a>
                    </li>
                    <li>
                        <a href="forum2" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i><span class="nav-label">Forum 2</span></a>
                    </li>
                    <li>
                        <a href="signin" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i><span class="nav-label">Sign in</span></a>
                    </li>

                    <li>
                        <a href="signin2" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i><span class="nav-label">Sign in 2</span> </a>
                    </li>
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Forms</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="forms.html" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Basic forms</a></li>
                            <li><a href="validation.html" class="hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>Validation</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i><span class="nav-label">Settings</span></a>
                    </li>
                </ul>
            </div>
			</div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="content-main"><!-- Ajax would go here --><!-- Exclude id="content-section" to avaiod ajax loading whole index into this div -->

				 <!-- forum2 code -->
				 <!--banner-->
				 <div class="content-top">
				 <div class="banner">
				 <?php
				 require_once '../connect.php';
				 $sql = "SELECT * FROM `categories`";
				 $res = mysqli_query($con,$sql) or die(mysqli_error($con));
				 $categories = "";

				 if (mysqli_num_rows($con,$res) > 0) {
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
				 </div><!-- End banner -->
				 </div><!-- End content-top -->

       </div><!-- End of content-section -->
       </div><!-- End page-wrapper -->
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.min.js"> </script>
</body>
</html>
