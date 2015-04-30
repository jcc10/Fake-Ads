<?php
	function sidebar_main($origin) {
		$tab = "\t\t\t\t\t\t";
		echo "<ul>\n";
		echo "$tab<li>Navigation</li>\n";
		$tmpItem = $fa_my_domain . "/index.php";
		sd_side_item("Home", $tmpItem, $origin);
		$tmpItem = $fa_my_domain ."/AD_001/index.php";
		sd_side_item("Example Ad ~ 01", $tmpItem, $origin);
		//$tmpItem = sd_fake_ads . "/";
		//sd_head_item("Our Services", $tmpItem, $origin);
		//$tmpItem = sd_fake_ads . "/index.php";
		//sd_head_item("Fake Ad's", $tmpItem, $origin);
		//$tmpItem = sd_fake_ads . "/PayPalPWYW.php";
		//sd_head_item("Online Donations", $tmpItem, $origin);
		//item("Website Design", "Website.php", $origin);
		//item("Business Support Contracts", "#", $origin);
		echo "\t\t\t\t\t</ul>\n";
	}
?>