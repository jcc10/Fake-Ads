<?php
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
?>