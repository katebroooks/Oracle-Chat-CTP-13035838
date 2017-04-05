<!---------------------------------
Oracle Chat Application - Kate Brooks
Student Number: 13035838
------------------------------------->
<?php session_start();
include('html/header.html');
include('error_handling.php');
?>
<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main" id="content-section"><!-- Ajax would go here -->
<!--pie-chart--->
<script src="public/js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">
        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#0794AB', // Light blue
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#51C9A4', // Green
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#F53A88', // Pink
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });
    </script>
		<!--Content-->
		<!-- Charts -->
		<div class="content-top">
			<div class="col-md-4 ">
				<div class="content-top-1">
				<!-- Solar Energy -->
				<div class="col-md-6 top-content">
					<h5>Solar Energy</h5>
					<label>8761</label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-1" class="pie-title-center" data-percent="25"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"></div>
				</div>
				<!-- //End -->
				<!-- //Vertical Farming -->
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Vertical Farming</h5>
					<label>6295</label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-2" class="pie-title-center" data-percent="50"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<!-- //End -->
				<!-- Sustainable Energy -->
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Sustainable Energy</h5>
					<label>3401</label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-3" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<!-- //-->
			</div>

			<div class="col-md-8 post-top">
				<div class="post">
					<form class="text-area">
						<textarea required="" >What are you thinking?</textarea>
					</form>
					<div class="post-at">
						<ul class="icon">
							<div  class="post-file">
							<i class="fa fa-location-arrow"></i>
							<input id="input-1" name="input1[]" type="file" multiple="" class="">
							</div>
							<div  class="post-file">
							<i class="fa fa-camera"></i>
							<input id="input-2" name="input2[]" type="file" multiple="" class="">
							</div>
							<div  class="post-file">
							<i class="fa fa-video-camera"></i>
							<input id="input-3" name="input3[]" type="file" multiple="" class="">
							</div>
							<script>
							$(document).on('ready', function() {
								$("#input-1").fileinput({showCaption: false});
							});
							</script>
							<script>
							$(document).on('ready', function() {
								$("#input-2").fileinput({showCaption: false});
							});
							</script>
							<script>
							$(document).on('ready', function() {
								$("#input-3").fileinput({showCaption: false});
							});
							</script>
						</ul>
						<form class="text-sub">
							<input type="submit" value="post">
						</form>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<!-- Chart.js random chart generator to show statistical effects for data visualisation-->
		<div class="content-bottom">
		<div class="graph-box">
			<div class="col-md-4 graph-3">
				<div class="grid-1 grid-on">
					<h3>Statistic Area</h3>
					<br>
					<canvas id="polarArea" height="300" width="300" style="width: 300px; height: 300px;"></canvas>
					<script>
						var chartData = [
							{
								value : Math.random(),
								color: "#0794AB"
							},
							{
								value : Math.random(),
								color: "#51C9A4"
							},
							{
								value : Math.random(),
								color: "#F53A88"
							},
							{
								value : Math.random(),
								color: "#50667f"
							},
							{
								value : Math.random(),
								color: "#011C28"
							},
							{
								value : Math.random(),
								color: "#001118"
							}
						];
						new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
				</script>
				</div>
			</div>
			<!-- END Statistic chart -->
			<!-- Calender plugin-->
			<div class="col-md-4">
					 <div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
			  <!----Calender Links -------->
			        <link rel="stylesheet" href="public/css/clndr.css" type="text/css" />
			        <script src="public/js/underscore-min.js" type="text/javascript"></script>
			        <script src= "public/js/moment-2.2.1.js" type="text/javascript"></script><!-- Date and Time plugin -->
			        <script src="public/js/clndr.js" type="text/javascript"></script>
		          <script src="public/js/site.js" type="text/javascript"></script>
			<!----End Calender -------->
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<?php
include('html/footer.html');
?>
