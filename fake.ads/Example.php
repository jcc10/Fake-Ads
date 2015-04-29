<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>C�us-Solutions: Home</title>
		<link href="menu_style.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div id="container">
			<div id="header">
				<h1>C�us-Solutions</h1>
				<h2><em>Pay what you want</em> Tech-support</h2>
				<br />
				<hr />

			</div> <!-- end header -->

			<div class="spacer"></div>
			<div id="left">

				<div id="leftcontent">

					<?php
						include "/WebFiles/caus-solutions.net/static_dynamic.php";
						sd_con("fake_ads");
						sd_side("Example Ad");
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
/*				BEGIN CODE				*/
include "ExampleCode.php";

// Prints Browser Data 
function PrintBrowser($BrowserArray, $ImgDir) {
	$tabs = "\t\t\t\t\t\t\t\t";
	// Browser or not a Browser
	if ($BrowserArray["IsBrowser"] == "FALSE") {
		send("NOT A BROWSER!!!", "You are not a browser and so this may not work for you, just a heads up!", "true");
	} else {
		Null;
	}
	//Sector Tag AFTER we display the error (If we do display the error...)
	sector("User-Agent Data");
		//All of the Browser Print Code!
		if ($BrowserArray["BrowserIdentified"] == "TRUE") {
			$outputH = "Browser: " . $BrowserArray["BrowserShort"];
			$outputB = "<img src=\"" . $ImgDir . $BrowserArray["BrowserImg"] . "\" alt=\"" . $BrowserArray["BrowserImgAlt"] . "\"></img><b class=\"LogoName\">" . $BrowserArray["BrowserName"] . "</b>\n";
			$outputB = $outputB . $tabs . "<br />&nbsp;<br />\n";
			$outputB = $outputB . $tabs . "Browser version: " . $BrowserArray["BrowserVersion"] . "<br />\n";
			$outputB = $outputB . $tabs . "Developers: " . $BrowserArray["BrowserCompany"] . "<br />\n" . "\t\t\t\t\t\t\t";
			send($outputH, $outputB);
		} else {
			$outputH = "Browser: " . $BrowserArray["BrowserShort"];
			$outputB = "<img src=\"" . $ImgDir . $BrowserArray["BrowserImg"] . "\" alt=\"" . $BrowserArray["BrowserImgAlt"] . "\"></img> Your browser is not in our Database<br /> Please send us the following text:<br />Browser Name:" . $BrowserArray["BrowserShort"] . "";
			$outputB = $outputB . $tabs . "Browser version: " . $BrowserArray["BrowserVersion"] . "<br />\n" . "\t\t\t\t\t\t\t";
			send($outputH, $outputB);
		}
}

// Prints OS Data
function PrintOS($OSdata, $ImgDir) {
	$tabs = "\t\t\t\t\t\t\t\t";
	$outputH = "OS: " . $OSdata["FullName"];
	$outputB = "<img src=\"" . $ImgDir . $OSdata["OS_Image"] . "\" alt=\"" . $OSdata["ImageAlt"] . "\"></img> &nbsp;&nbsp;&nbsp;<b class=\"LogoName\">" . $OSdata["FullName"] . "</b>\n";
	$outputB = $outputB . $tabs . "<br /> &nbsp; <br /> &nbsp; <br />\n";
	$outputB = $outputB . $tabs . "OS Arch: " . $OSdata["Arch"] . "<br />\n";
	$outputB = $outputB . $tabs . "OS Version: " . $OSdata["Version"] . "<br />\n";
	$outputB = $outputB . $tabs . "OS Version Name: " . $OSdata["Version Name"] . "<br />\n";
	$outputB = $outputB . $tabs . "OS Producer: <a href=\"" . $OSdata["Producer URL"] . "\">" . $OSdata["Producer"] . "</a>";
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

//	Main
function main($IP, $GeoIP, $UserAgent) {
	global $implement;
	//Call Identifiers
	$BrowserData = IdentifyBrowser($UserAgent);
	$OsData = IdentifyOperatingSystems($UserAgent);
	
	// Call Browser Printer
	PrintBrowser($BrowserData, $implement["IMG DIR BROWSERS"]);
	PrintOS($OsData, $implement["IMG DIR OS"]);
	/*
		// OS precise Arch name
		$TMPr = $UserAgent["os_type"];
		$TMPl = strtolower($TMPr);
		$TMP2r = $UserAgent["os_name"];
		$TMP2l = strtolower($TMP2r);
		if ($TMPl == "windows") {
			if ($TMP2l == "windows 7") {
				send("OS: Windows 7", "<img src=\"./logos/Win7.png\" alt=\"Windows 7 Logo\"></img> &nbsp;&nbsp;&nbsp;<b class=\"LogoName\">Windows 7</b>");
			} elseif ($TMP2l == "windows nt") {
				send("OS: Windows 8", "<img src=\"./logos/Win8.png\" alt=\"Windows 8 Logo\"></img> &nbsp;&nbsp;&nbsp;<b class=\"LogoName\">Windows 8</b>");
			} elseif ($TMP2l == "windows vista") {
				send("OS: Windows 8", "<img src=\"./logos/WinVista.png\" alt=\"Windows Vista Logo\"></img> &nbsp;&nbsp;&nbsp;<b class=\"LogoName\">Windows Vista</b>");
			} elseif ($TMP2l == "windows xp") {
				send("OS: Windows XP", "<!--<img src=\"./logos/WinUnknown.png\" alt=\"Windows Logo\"></img>-->NEED IMAGE! &nbsp;&nbsp;&nbsp;<b class=\"LogoName\">Windows XP</b>");
			} else {
				send("OS: Unknown Windows", "<img src=\"./logos/WinUnknown.png\" alt=\"Windows Logo\"></img> &nbsp;&nbsp;&nbsp;<b class=\"LogoName\">Windows</b><br />Unknown version.<br />Please contact us with both the OS short and long below.<br />OS short: $TMPr<br />OS long: $TMP2l");
			}
		} elseif ($TMPl == "android") {
			send("OS: Android", "NEED IMAGE! &nbsp;&nbsp;&nbsp;<b class=\"LogoName\">Android</b><br />Details: See LINUX DETAILS");
		} else {
			send("OS: Unknown", "OS short: $TMPr<br />OS long: $TMP2l<br />Please contact us with both the OS short and long above.");
		}
		*/
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

// GenLog
//$data = $remoteIP . "~" . $RawAPI_GeoIP . "~" . $RawAPI_UserAgent . date("c");
//$filename = "/home/ClineJ/CSsite/Example_ads/Example.log";
//file_put_contents( $filename , $data , FILE_APPEND | LOCK_EX);

/*				END CODE				*/
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
