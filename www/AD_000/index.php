<?php
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
						sd_side("Example Ad ~ 00");
					?>
					<p>&nbsp;</p>
					<h3>Disclaimer</h3>
					<p class="warning">
						By using this page, you allow us to use the data collected for targeted ad's.<br />
						(Fake ad's but still ad's)
					</p>
				</div> <!-- end left content -->
			</div> <!-- end left division -->
			<div id="main">
				<div id="maincontent">
				<!-- BEGIN UserAgent PHP CODE -->
<?php

//Loads CoreExampleCode.php (Everything is there now)

$TmpLoc = $local_directory . "www/AD_000/CoreExampleCode.php";
include $TmpLoc;

?>
				<!-- END UserAgent PHP CODE -->
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
