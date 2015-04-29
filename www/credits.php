<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><?php
	include "./static_dynamic.php";
	sd_head("Home");
?>
	<body>
		<div id="container">
			<div id="header"><?php
				sd_title();
			?>
			</div> <!-- end header -->

			<div class="spacer"></div>
			<div id="left">

				<div id="leftcontent">

					<?php
						sd_side("Credits");
					?>
					<p>&nbsp;</p><!--
					<h3>News</h3>
					<p class="news">
						1/14 | Idea conceived<br />
						1/17 | Semester starts<br />
						1/19 | Design completed
					</p> -->
				</div> <!-- end left content -->
			</div> <!-- end left division -->
			<div id="main">
				<div id="maincontent">

					<!-- Who built this? -->
					<h3 class="top_main_heading">Template</h3>
					<p>Click <a href="credits_template.php">HERE</a> to view who coded the main site's template.
					</p>
					
					<!-- Revision 1 -->
					<h3>Ad's</h3>
					<p>Click HERE to view who coded each AD!</p>
					
					<!-- Revision 2 -->
					<h3>Core Code</h3>
					<p>Click HERE to view who coded the Core Code for this project!</p>
					
					<!-- Revision 3 -->
					<!--<h3>Other</h3>
					<p>Other notable people who don't really fit into any category.</p>-->
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
