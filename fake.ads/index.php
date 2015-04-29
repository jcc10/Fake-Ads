<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Cáus-Solutions: Home</title>
		<link href="menu_style.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div id="container">
			<div id="header"><?php
				include "/WebFiles/caus-solutions.net/CORE_static_dynamic.php";
				sd_head();
			?>
			</div> <!-- end header -->
			<div class="spacer"></div>
			<div id="left">

				<div id="leftcontent">

					<?php
						sd_side("Home");
					?>
					<p>&nbsp;</p>
					<h3>Disclaimer</h3>
					<p class="warning">
						By using any of these links, you allow us to use the data collected for targeted ad's.<br />
						(Fake ad's but still ad's)
					</p>
				</div> <!-- end left content -->
			</div> <!-- end left division -->
			<div id="main">
				<div id="maincontent">

					<!-- What is this? -->
					<h3 class="top_main_heading">What is this?</h3>
					<p>We have made some pages that display how diffrent ad's can trick you into thinking that you are on a official website when you are not.
					<br />&nbsp;<br />
					Click <a href="#">HERE</a> to see how it works, otherwise click on one of the examples below to see it in action!
					</p>
					
					<!-- Example list of information -->
					<h3>Example list of information</h3>
					<p>This is just a list of information we can gather from your user-agent string, a geoIP lookup, and OS. <br />Click <a href="Example.php">HERE</a> to see the page</p>
					
					<!-- Updates Needed! -->
					<h3>Updates Needed!</h3>
					<p>There are updates for your browser, Click <a href="#">HERE</a> to see what they are!</p>
					
					<!-- About us. -->
					<!--<h3>About us.</h3>
					<p>Cáus Solutions started early 2014 as a small business by Joshua Cline, we provide Tech-support to those who could really use it! We oporate out of the Orangvale area and service Citrus Hights, Folsom, Fair Oaks, and Roseville.</p>-->
				</div> <!-- end main content section -->
			</div> 
			<div id="footer"><div class="spacer"></div>
				<?php
					sd_foot();
				?>
			</div> <!-- end footer -->

		</div> <!-- end container -->
	</body>

</html>
