<?php
// This is where the main PHP code for the example will be


/*				BEGIN CODE				*/
$TmpLoc = $local_directory . "www/AD_000/ExampleCode.php";
if ($GLOBALS["DevPro_Mode"] == "dev") {
	echo "<!-- Loading $TmpLoc...";
	include $TmpLoc;
	echo " ...$TmpLoc Loaded -->";
} elseif (($GLOBALS["DevPro_Mode"] == "production") or ($GLOBALS["DevPro_Mode"] == "pro")) {
	include $TmpLoc;
}

// Prints Debug Data
function PDBM($IP, $GeoIP, $UserAgent) {
	$IPpost = "<li><b>IP:</b> " . $IP . "</li>\n";
	$GeoIPpost = "";
	
	foreach ($GeoIP as $Key => $Data) {
		$GeoIPpost = $GeoIPpost . "<li>" . $Key . ": \"" . $Data . "\"</li>\n";
	}
	$UserAgentPost = "";
	
	foreach ($UserAgent as $Key => $Data) {
		$UserAgentPost = $UserAgentPost . "<li>" . $Key . ": \"" . $Data . "\"</li>\n";
	}
	$todbg = $IPpost . "<li><b>UserAgent Data:</b></li>\n" . $UserAgentPost . "<li><b>GeoIP:</b></li>\n" . $GeoIPpost . "\n";
		echo("\t\t\t\t\t<h3 class=\"DEBUG\">&nbsp;&nbsp;&nbsp;" . "Debug Data" . "</h3>\n");
		echo("\t\t\t\t\t\t<ul>" . $todbg . "</ul>\n");
}

// Load PrintBrowser
$TmpLoc = $local_directory . "www/AD_000/PrintBrowser.php";
if ($GLOBALS["DevPro_Mode"] == "dev") {
	echo "<!-- Loading $TmpLoc...";
	include $TmpLoc;
	echo " ...$TmpLoc Loaded -->";
} elseif (($GLOBALS["DevPro_Mode"] == "production") or ($GLOBALS["DevPro_Mode"] == "pro")) {
	include $TmpLoc;
}

// Load PrintOS
$TmpLoc = $local_directory . "www/AD_000/PrintOS.php";
if ($GLOBALS["DevPro_Mode"] == "dev") {
	echo "<!-- Loading $TmpLoc...";
	include $TmpLoc;
	echo " ...$TmpLoc Loaded -->";
} elseif (($GLOBALS["DevPro_Mode"] == "production") or ($GLOBALS["DevPro_Mode"] == "pro")) {
	include $TmpLoc;
}

//	Main
function main($IP, $GeoIP, $UserAgent) {
	global $implement;
	//Call Identifiers
	$BrowserData = IdentifyBrowser($UserAgent);
	$OsData = IdentifyOperatingSystems($UserAgent);
	
	// Am I in debug mode?
	if (isset($_GET["DBG"])) {
		if (($_GET["DBG"] == "TRUE") or ($_GET["DBG"] == "1")) {
			PDBM($IP, $GeoIP, $UserAgent);
		}
	}
	
	// Call Browser Printer
	PrintBrowser($BrowserData, $implement["IMG DIR BROWSERS"]);
	PrintOS($OsData, $implement["IMG DIR OS"]);
	
	// IP
	sector("IP");
		send("IP", $IP);
	
	// GeoIP
	sector("GeoIP");
		// Country Codes
		$TMPr = $GeoIP["country_code"];
		$TMPl = strtolower($TMPr);
		$TMP2r = $GeoIP["country_code3"];
		$TMP2l = strtolower($TMP2r);
		$TMP3r = $GeoIP["country"];
		$TMP3l = strtolower($TMP3r);
		send("Country Code: $TMPr", "The 2 letter country code is: $TMPr<br /> The 3 letter country code is: $TMP2r<br /> The full country name is: $TMP3r");
		// continent codes
		$TMPr = $GeoIP["continent_code"];
		$TMPl = strtolower($TMPr);
		if (isThereData($TMPl) == "TRUE") {
			send("Content Code: $TMPr", "Content Code: $TMPr");
		} else {
			Null;
		}
		// ISP
		$TMPr = $GeoIP["isp"];
		$TMPl = strtolower($TMPr);
		$ISP = ISP_DB($TMPr);
		if ($ISP != $TMPr) {
			send("ISP: $ISP", "Your ISP is: $ISP<br />The raw name is: $TMPr");
		} else {
			send("ISP: $TMPr", "Your ISP is: $TMPr");
		}
}

//	init
$remoteIP = getUserIP();
$RawAPI_UserAgent = getUserAgent();
$RawAPI_GeoIP = getGeoIPdata($remoteIP);
$printedData = 0;
main($remoteIP, $RawAPI_GeoIP, $RawAPI_UserAgent);

//What to send (Options for the body)
echo "\t\t\t\t\t\t<h3>&nbsp;&nbsp;&nbsp;Options</h3>\n";
echo "\t\t\t\t\t\t\t" . "<form action=\"" . $_SERVER['PHP_SELF'] . "\" method=\"get\">\n\tDebug: <select name=\"DBG\">\n\t\t<option value=\"FALSE\">Off</option>\n\t\t<option value=\"TRUE\">On</option>\n\t</select>\n\t<input type=\"submit\" value=\"Send Data\"></form>" . "\n";

// GenLog
//$data = $remoteIP . "~" . $RawAPI_GeoIP . "~" . $RawAPI_UserAgent . date("c");
//$filename = "/home/ClineJ/CSsite/Example_ads/Example.log";
//file_put_contents( $filename , $data , FILE_APPEND | LOCK_EX);

/*				END CODE				*/

?>