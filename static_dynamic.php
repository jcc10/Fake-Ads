<?php
/* below here is a list of all items, edit this from now on! */
function sd_head($origin) {
	$tab = "\t\t\t\t";
	echo "$tab<h1>Cáus-Solutions</h1>\n$tab<h2><em>Pay what you want</em> Tech-support</h2>\n$tab<br />\n$tab<hr />";
}
function sd_side($origin) {
	$tab = "\t\t\t\t\t\t";
	echo "<ul>\n";
	echo "$tab<li>Navigation</li>\n";
	$tmpItem = sd_root . "/index.php";
	sd_head_item("Home", $tmpItem, $origin);
	$tmpItem = sd_ticket ."/";
	sd_head_item("On-line Support Tickets", $tmpItem, $origin);
	$tmpItem = sd_root . "/Services.php";
	sd_head_item("Our Services", $tmpItem, $origin);
	$tmpItem = sd_fake_ads . "/index.php";
	sd_head_item("Fake Ad's", $tmpItem, $origin);
	$tmpItem = sd_root . "/PayPalPWYW.php";
	sd_head_item("Online Donations", $tmpItem, $origin);
	//item("Website Design", "Website.php", $origin);
	//item("Business Support Contracts", "#", $origin);
	echo "					</ul>\n";
}
function sd_side_item($Text, $Link, $Source) {
	$tab = "\t\t\t\t\t\t";
	if ($Source == $Text) {
		echo "$tab<li><a href=\"#header\">$Text</a></li>\n";
	} else{
		echo "$tab<li><a href=\"$Link\">$Text</a></li>\n";
	}
}
function sd_foot() {
	// Left
	$sd_tab = "\t\t\t\t";
	echo "<p class=\"left\">\n";
		echo "$sd_tab\t | <a href=\"http://jigsaw.w3.org/css-validator/\"><img src=\"http://static.caus-solutions.com/img/vcss-blue.gif\" alt=\"CSS Level 3\" title=\"CSS Level 3\"></img></a> | \n$sd_tab\t\t<a href=\"http://validator.w3.org/check?uri=referer\"><img src=\"http://static.caus-solutions.com/img/valid-xhtml11-blue.png\" alt=\"XHTML 1.1\" title=\"XHTML 1.1\"></img></a> | \n$sd_tab\t\t<a href=\"" . sd_ticket . "scp/\">Agent Login</a></p>\n";
	// Right
	echo "$sd_tab<p class=\"right\">\n";
	echo "$sd_tab\t<a href=\"" . sd_root . "/credits.php\">Click here to view source tree.</a><br />\n";
	echo "$sd_tab\t&copy;2015 C&#225;us Solutions<br />&nbsp;\n";
	echo "$sd_tab</p>\n";
}
function sd_con($subdomain){
	if ($subdomain == "www") {
		define("sd_root", "");
		define("sd_fake_ads", "http://fake.ads.caus-solutions.com");
		define("sd_ticket", "http://tickets.caus-solutions.com");
	} elseif ($subdomain == "fake_ads") {
		define("sd_root", "http://www.caus-solutions.com");
		define("sd_fake_ads", "");
		define("sd_ticket", "http://tickets.caus-solutions.com");
	} else {
		define("sd_root", "http://www.caus-solutions.com");
		define("sd_fake_ad", "http://fake.ads.caus-solutions.com");
		define("sd_tickets", "http://tickets.caus-solutions.com");
	}
}
?>