<?php
// CONFIGURATION FILE
$IAM_relative = getcwd() . "/../../";
$TmpLoc = $IAM_relative . "local_configuration.php";
include $TmpLoc;

/* Header */
function sd_head($page) {
	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n\t<head>\n\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />\n\t\t<title>Fake Ad's: " . $page . "</title>\n\t\t<link href=\"ad_style.css\" rel=\"stylesheet\" type=\"text/css\" />\n\t</head>\n";
}

/* Title */
function sd_title() {
	global $sd_host, $sd_host_URL;
	$tab = "\t\t\t\t";
	echo "\n$tab<h1>Fake-Ad's</h1>\n$tab<h2><a href=\"" . $sd_host_URL . "/index.php\"><em>" . $sd_host . "</em></a> Mirror</h2>\n$tab<br />\n$tab<hr />\n";
}
function sd_side($origin) {
	global $IAM_relative;
	$TmpLoc = $IAM_relative . "www/sidebar.php";
	include $TmpLoc;
	sidebar_main($origin);
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
	global $fa_my_domain;
	// Left
	$sd_tab = "\t\t\t\t";
	echo "<p class=\"left\">\n";
		echo "$sd_tab\t | <a href=\"http://jigsaw.w3.org/css-validator/\"><img src=\"/static/IMG/vcss-blue.gif\" alt=\"CSS Level 3\" title=\"CSS Level 3\"></img></a> | \n$sd_tab\t\t<a href=\"http://validator.w3.org/check?uri=referer\"><img src=\"/static/IMG/valid-xhtml11-blue.png\" alt=\"XHTML 1.1\" title=\"XHTML 1.1\"></img></a>";
	// Right
	echo "$sd_tab<p class=\"right\">\n";
	echo "$sd_tab\t<a href=\"" . $fa_my_domain . "/credits.php\">Click here to view source tree.</a><br />\n";
	echo "$sd_tab\t&copy;2015 C&#225;us Solutions<br />&nbsp;\n";
	echo "$sd_tab</p>\n";
}
?>