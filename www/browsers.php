<?php
	function IdentifyBrowser($UserAgent) {
		$CheckUserAgent = array_map('strtolower', $UserAgent);
		$output = array();
		if ($CheckUserAgent["agent_type"] == "browser"){
			$output["IsBrowser"] = "TRUE";
		} else {
			$output["IsBrowser"] = "FALSE";
			$output["agent_type"] = $UserAgent["agent_type"];
		}
		
		$output["BrowserIdentified"] = "TRUE";
		if ($CheckUserAgent["agent_name"] == "firefox"){
			// Browser Name: Mozilla Firefox
			$output["BrowserName"] = "Mozilla Firefox";
			$output["BrowserShort"] = "Firefox";
			$output["BrowserImg"] = "firefox-512.png";
			$output["_IMG SOURCE"] = "http://people.mozilla.org/~faaborg/files/shiretoko/firefoxIcon/firefox-512.png";
			$output["BrowserImgAlt"] = "Firefox Logo";
			$output["BrowserCompany"] = "Mozilla";
			$output["BrowserVersion"] = $UserAgent["agent_version"];
		} elseif ($CheckUserAgent["agent_name"] == "chrome"){
			// Browser Name: Google Chrome
			$output["BrowserName"] = "Google Chrome";
			$output["BrowserShort"] = "Chrome";
			$output["BrowserImg"] = "google_chrome_by_juniorgustabo-d513nlo.png";
			$output["_IMG SOURCE"] = "http://th03.deviantart.net/fs71/PRE/i/2012/145/9/9/google_chrome_by_juniorgustabo-d513nlo.png";
			$output["BrowserImgAlt"] = "Chrome Logo";
			$output["BrowserCompany"] = "Google";
			$output["BrowserVersion"] = $UserAgent["agent_version"];
		} elseif ($CheckUserAgent["agent_name"] == "internet explorer"){
			// Browser Name: Microsoft Internet Explorer
			$output["BrowserName"] = "Internet Explorer";
			$output["BrowserShort"] = "IE";
			$output["BrowserImg"] = "internet_explorer_simplistic_logo__vector_by_luchocas-d6cpwey.png";
			$output["_IMG SOURCE"] = "http://th02.deviantart.net/fs71/PRE/f/2013/190/3/6/internet_explorer_simplistic_logo__vector_by_luchocas-d6cpwey.png";
			$output["BrowserImgAlt"] = "Internet Explorer Logo";
			$output["BrowserCompany"] = "Microsoft";
			$output["BrowserVersion"] = $UserAgent["agent_version"];
		} elseif ($CheckUserAgent["agent_name"] == "Jim") {
			// Browser Name: opera TODO
			$output["BrowserShort"] = "Opera";
			$output["BrowserImg"] = "Opera_browser_logo_2013_vector.svg";
			$output["_IMG SOURCE"] = "http://img1.wikia.nocookie.net/__cb20140820190031/logopedia/images/5/5c/Opera_browser_logo_2013_vector.svg";
		} else {
			// Browser Name: Not Available
			$output["BrowserName"] = "NA";
			$output["BrowserShort"] = $UserAgent["agent_name"];
			$output["BrowserImg"] = "UnknownCopyrightLicence.png";
			$output["_IMG SOURCE"] = "http://www.petermaas.nl/extinct/images/UnknownCopyrightLicence.png";
			$output["BrowserImgAlt"] = "Question Mark Image";
			$output["BrowserCompany"] = "Unknown";
			$output["BrowserVersion"] = $UserAgent["agent_version"];
			$output["BrowserIdentified"] = "FALSE";
		}
		return $output;
	}
?>