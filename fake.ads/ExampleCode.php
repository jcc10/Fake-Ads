<?php
//	Load CORE API TOOLS
include "CoreAPItools.php";

//	Load BROWSERS & OS's ID'ing Code
include "browsers.php";
include "OperatingSystems.php";

// Implementation Variables IE: where logos are.
$implement = array();
$implement["IMG DIR BROWSERS"] = "./logos/browsers/";
$implement["IMG DIR OS"] = "./logos/OS/";

//	Example Code Formatting
function send($Title, $Content, $DEBUG = "false") {
	global $printedData;
	$DEBUG = strtolower($DEBUG);
	if ($DEBUG == "true") {
		echo("\t\t\t\t\t<h3 class=\"DEBUG\">&nbsp;&nbsp;&nbsp;" . $Title . "</h3>\n");
		echo("\t\t\t\t\t\t<p class=\"DEBUG\">" . $Content . "</p>\n");
		$printedData = $printedData - 1;
	} elseif ($printedData == 0) {
		echo("\t\t\t\t\t\t<h3 class=\"top_main_heading\">&nbsp;&nbsp;&nbsp;" . $Title . "</h3>\n");
		echo("\t\t\t\t\t\t\t<p>" . $Content . "</p>\n");
	} else {
		echo("\t\t\t\t\t\t<h3>&nbsp;&nbsp;&nbsp;" . $Title . "</h3>\n");
		echo("\t\t\t\t\t\t\t<p>" . $Content . "</p>\n");
	}
	$printedData = $printedData + 1;
}
function sector($Title){
	echo("\t\t\t\t\t<h3 class=\"sector\">&nbsp;" . $Title . "</h3>\n");
}
function dbg($data) {
	send("DEBUG", $data, "true");
}



?>