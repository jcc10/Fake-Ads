<?php
// CONFIGURATION FILE
$sd_host = "C&#225;us Solutions";
$sd_host_URL = "http://www.caus-solutions.com";
$sd_my_domain = "";

/* Header */
function sd_head($origin) {
	global $sd_host, $sd_host_URL;
	$tab = "\t\t\t\t";
	echo "$tab<h1>Fake-Ad's</h1>\n$tab<h2><a href=\"" . $sd_host_URL . "/index.php\"><em>" . $sd_host . "</em></a> Mirror</h2>\n$tab<br />\n$tab<hr />";
}
function sd_side($origin) {
	$tab = "\t\t\t\t\t\t";
	echo "<ul>\n";
	echo "$tab<li>Navigation</li>\n";
	$tmpItem = $sd_my_domain . "/index.php";
	sd_side_item("Home", $tmpItem, $origin);
	$tmpItem = $sd_my_domain ."/Example.php";
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
		echo "$sd_tab\t | <a href=\"http://jigsaw.w3.org/css-validator/\"><img src=\"http://static.caus-solutions.com/img/vcss-blue.gif\" alt=\"CSS Level 3\" title=\"CSS Level 3\"></img></a> | \n$sd_tab\t\t<a href=\"http://validator.w3.org/check?uri=referer\"><img src=\"http://static.caus-solutions.com/img/valid-xhtml11-blue.png\" alt=\"XHTML 1.1\" title=\"XHTML 1.1\"></img></a>";
	// Right
	echo "$sd_tab<p class=\"right\">\n";
	echo "$sd_tab\t<a href=\"" . sd_root . "/credits.php\">Click here to view source tree.</a><br />\n";
	echo "$sd_tab\t&copy;2015 C&#225;us Solutions<br />&nbsp;\n";
	echo "$sd_tab</p>\n";
}
?>