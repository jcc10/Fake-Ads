<?php
function PrintOS($OSdata, $ImgDir) {
	$tabs = "\t\t\t\t\t\t\t\t";
	$outputH = "OS: " . $OSdata["FullName"];
	$outputB = "<img src=\"" . $ImgDir . $OSdata["OS_Image"] . "\" alt=\"" . $OSdata["ImageAlt"] . "\"></img> &nbsp;&nbsp;&nbsp;<b class=\"LogoName\">" . $OSdata["FullName"] . "</b>\n";
	$outputB = $outputB . $tabs . "<br /> &nbsp; <br /> &nbsp; <br />\n";
	$outputB = $outputB . $tabs . "OS Arch: " . $OSdata["Arch"] . "<br />\n";
	if (empty($OSdata["Version"]) != True) {
		$outputB = $outputB . $tabs . "OS Version: " . $OSdata["Version"] . "<br />\n";
	}
	if (empty($OSdata["Version Name"]) != True) {
		$outputB = $outputB . $tabs . "OS Version Name: " . $OSdata["Version Name"] . "<br />\n";
	}
	if (empty($OSdata["Producer URL"]) != True) {
		$outputB = $outputB . $tabs . "OS Producer: <a href=\"" . $OSdata["Producer URL"] . "\">" . $OSdata["Producer"] . "</a>";
	}
	if (empty($OSdata["Producer URL"]) != True) {
		$outputB = $outputB . $tabs . "OS Producer: <a href=\"" . $OSdata["Producer URL"] . "\">" . $OSdata["Producer"] . "</a>";
	}
	if ($OSdata["Notes"] != "None") {
		$outputB = $outputB . "<br />/n";
		$outputB = $outputB . $tabs . "Notes: " . $OSdata["Notes"];
	}
	$outputB = $outputB . "\n" . "\t\t\t\t\t\t\t";
	send($outputH, $outputB);
	if ($OSdata["LinuxPannel"] == "TRUE") {
		Null;
	}
}
?>