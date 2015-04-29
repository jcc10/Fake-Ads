<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Cáus-Solutions: Home</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div id="container">
			<div id="header">
				<h1>Cáus-Solutions</h1>
				<h2><em>Pay what you want</em> Tech-support</h2>
				<br />
				<hr />

			</div> <!-- end header -->

			<div class="spacer"></div>
			<div id="left">

				<div id="leftcontent">

					<?php
						include "/WebFiles/caus-solutions.net/static_dynamic.php";
						sd_con("www");
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
					<h3 class="top_main_heading">Who built this?</h3>
					<p>This website's template has a bit of a history. It has been re-done by several people.
					</p>
					
					<!-- Revision 1 -->
					<h3>Revision 1</h3>
					<p>The first revision was Adam Particka's autonomous template.<br />
					(Copyright &copy; 2004, Adam Particka. All Rights Reserved.)<br />
					You can find it <a href="http://www.oswd.org/design/preview/id/1570/">HERE</a>!</p>
					
					<!-- Revision 2 -->
					<h3>Revision 2</h3>
					<p>The next revision was made by  Matt Hollis (&copy;2006)<br />His template can be found <a href="http://www.oswd.org/design/preview/id/2613/">HERE</a>!</p>
					
					<!-- Revision 3 -->
					<h3>Revision 3</h3>
					<p>Revision 3 was made by Cáus Solutions for our website, some code was copyed from the osTicket's template, other areas was simply re-coded to fit our style.<br />
					Design &copy;2015 Cáus Solutions. Contact Us if you want to use it.</p>
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
