<?php session_start();
include('html/header.html');
?>
<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main" id="content-section"><!-- Ajax would go here -->
 	<!--banner-->
		    <div class="content-top">
		     <div class="banner">
					<div class="forum-question">
						<h4>I'm looking for someone who specialises in solar panels?</h4>
						<p><img src="images/profile.jpg"/> Asked by <a href="#"><strong>Terry Tibbs</strong></a> 10 January 17</p>
						<p>Hi, I've been working on the conceptual design of a solar panel farm in Colorado. We all know how exceptional solar panels or 'tiles' are becoming, which is why I want to make use of the land I own in Colorado.</p>
						<!--
							<div class="hashtags">
								<span class="count">#solar-energy</span>
								<span class="count">#looking-for-specialist</span>
								<span class="count">#conceptual</span>
								<span class="count">#colorado</span>
							</div> -->
					</div>
		    </div>
		   </div>
		<!--//banner-->
		<div class="row">
		<div class="answer">
      <label class="name-answer">
			     <p id="name-area">Martin Doobie said...</p>
      </label>
			<div id="chat-wrap">
				<div id="chat-area"></div>
			</div>
		</div>
		</div>

		<div class="row">
      <div class="col-md-10">
		      <div class="forum-textarea"><!-- took out comment class-->
				        <form id="send-message-area">
					             <textarea id="sendie" maxlength = '100' placeholder="Type here" rows="8" cols="50"></textarea>
                </form>
          </div>
      </div>
      <div class="col-md-2 forum-sub">
					   <input type="submit" value="post">
		  </div>
		</div>
  <!-- END Forum -->
</div>
</div>

<?php
include('html/footer.html');
?>
