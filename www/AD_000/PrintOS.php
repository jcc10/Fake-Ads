<?php
function PrintOS($OSdata, $ImgDir) {
	$tabs = "\t\t\t\t\t\t\t\t";
	$outputH = "OS: " . $OSdata["FullName"];
	$outputB = "<img src=\"" . $ImgDir . $OSdata["OS_Image"] . "\" alt=\"" . $OSdata["ImageAlt"] . "\"></img> &nbsp;&nbsp;&nbsp;<b class=\"LogoName\">" . $OSdata["FullName"] . "</b>\n";
	$outputB = $outputB . $tabs . "<br /> &nbsp; <br /> &nbsp; <br />\n";
	$outputB = $outputB . $tabs . "OS Arch: " . $OSdata["Arch"] . "<br />\n";
	if (isThereData($OSdata["Version"]) == "TRUE") {
		$outputB = $outputB . $tabs . "OS Version: " . $OSdata["Version"] . "<br />\n";
	}
	if (isThereData($OSdata["Version Name"]) == "TRUE") {
		$outputB = $outputB . $tabs . "OS Version Name: " . $OSdata["Version Name"] . "<br />\n";
	}
	if (isThereData($OSdata["Producer URL"]) == "TRUE") {
		$outputB = $outputB . $tabs . "OS Producer: <a href=\"" . $OSdata["Producer URL"] . "\">" . $OSdata["Producer"] . "</a>";
	}
	if (isThereData($OSdata["Producer URL"]) == "TRUE") {
		$outputB = $outputB . $tabs . "OS Producer: <a href=\"" . $OSdata["Producer URL"] . "\">" . $OSdata["Producer"] . "</a>";
	}
	if (isThereData($OSdata["Notes"]) == "TRUE") {
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