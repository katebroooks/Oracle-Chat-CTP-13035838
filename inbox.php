<?php session_start();
include('html/header.html');
?>
<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main" id="content-section"><!-- Ajax would go here -->
<!-- Start inbox -->
 	<div class="inbox-mail">
	<div class="col-md-3 compose">
		<form action="#" method="GET">
                <div class="input-group input-group-in">
                    <input type="text" name="search" class="form-control2 input-search" placeholder="Search...">
                </div><!-- Input Group -->
            </form>
            <h2>Compose</h2>
    <nav class="nav-sidebar">
		<ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-inbox"></i>Inbox<div class="clearfix"></div></a></li>
          <li class=""><a href="#tab2" data-toggle="tab"><i class="fa fa-paper-plane-o"></i>Sent</a></li>
          <li class=""><a href="#tab3" data-toggle="tab"><i class="fa fa-star-o"></i>Important</a></li>
          <li class=""><a href="#tab4" data-toggle="tab"><i class="fa fa-pencil-square-o"></i>Draft<div class="clearfix"></div></a></li>
          <li class=""><a href="#tab5" data-toggle="tab"><i class="fa fa-trash-o"></i>Delete</a></li>
		</ul>
	</nav>
		<div class="content-box">
			<ul>
			<li><span>Folder</span></li>
			<li><a href="#"><i class="fa fa-folder-o"></i>Hot Topics</a></li>
			<li><a href="#"><i class="fa fa-folder-o"></i>New Projects</a></li>
			</ul>
        </div>
</div>
<!-- Tab content -->
<div class="col-md-9 tab-content tab-content-in">
<div class="tab-pane active text-style" id="tab1">
  <div class="inbox-right">
        <div class="mailbox-content">
          <div class="mail-toolbar clearfix">
			     <div class="float-left">
			       <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">New</a></li>
                                        <li><a href="#">Spam</a></li>
                                        <li><a href="#">Trash</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Solar</a></li>
                                        <li><a href="#">Wind</a></li>
                                        <li><a href="#">Water</a></li>
                                        <li><a href="#">Electricity</a></li>
                                        <li><a href="#">Sustainable</a></li>
                                        <li><a href="#">Urban</a></li>
                                    </ul>
                                </div>
                            </div>
			    </div>
			    <div class="float-right">
						<div class="dropdown">
			            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
			                <i class="fa fa-cog icon_8"></i>
			                <i class="fa fa-chevron-down icon_8"></i>
			            <div class="ripple-wrapper"></div></a>
			            <ul class="dropdown-menu float-right">
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-pencil-square-o icon_9"></i>
			                        Edit
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-calendar icon_9"></i>
			                        Schedule
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-download icon_9"></i>
			                        Download
			                    </a>
			                </li>
			                <li>
			                    <a href="#" class="font-red" title="">
			                        <i class="fa fa-times" icon_9=""></i>
			                        Delete
			                    </a>
			                </li>
			            </ul>
			        </div>
                            <div class="btn-group">
                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                            </div>
			    </div>
               </div>
							 <!-- Inbox messages -->
                <table class="table">
                    <tbody>
						<tr class="table-row">
                            <td class="table-img">
                               <a href="socket.html"><img src="public/images/in1.jpg" alt="" /></a>
                            </td>
                            <td class="table-text">
                            	<h6>Liz Beecham</h6>
                                <p>Hi Kate. I saw you were interested in vertical farming.</p>
                            </td>
                            <td>

                            </td>
                            <td class="march">
                                in 2 days
                            </td>

                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
						<tr class="table-row">
                            <td class="table-img">
                               <img src="public/images/in2.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6>Sam Kitching</h6>
                                <p>I'm starting a business based on reconstructing plants.</p>
                            </td>
                            <td>

                            </td>
                            <td class="march">
                                in 2 days
                            </td>

                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
						<tr class="table-row">
                            <td class="table-img">
                               <img src="public/images/in3.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6>Lucy Lou</h6>
                                <p>I need a partner, would you like to join?</p>
                            </td>
                            <td>
                            	<span class="mar">Important</span>
                            </td>
                            <td class="march">
                                in 1 days
                            </td>

                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
						<tr class="table-row">
                            <td class="table-img">
                               <img src="public/images/in4.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6>Julie Walters</h6>
                                <p>Hi Kate, what's your opinion on geodes?</p>
                            </td>
                            <td>
                            	<span class="ur">Urgent</span>
                            </td>
                            <td class="march">
                                in 1 days
                            </td>

                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
               </div>
            </div>
</div>
</div>
</div><!-- End inbox-mail -->
</div><!-- End content-section -->
</div><!-- End page-wrapper -->
<?php
include('html/footer.html');
?>
