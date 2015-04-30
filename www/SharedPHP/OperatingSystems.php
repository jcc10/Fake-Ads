<?php

	/* This holds the Arch System Identification only, all sub identification is loaded from another file and then run */
	function IdentifyOperatingSystems($UserAgent) {
		global $local_directory;
		$CheckUserAgent = array_map('strtolower', $UserAgent);
		$output = array();

		
		$output["Notes"] = "None";
		if ($CheckUserAgent["os_type"] == "windows") {
			$output["Arch"] = "Windows";
			$output["LinuxPannel"] = "FALSE";
			$TmpLoc = $local_directory . "www/SharedPHP/OS_Windows.php";
			include $TmpLoc;
			$output = OS_WIN($CheckUserAgent, $output, $UserAgent);
		} elseif ($CheckUserAgent["os_type"] == "android") {
			$TmpLoc = $local_directory . "www/SharedPHP/OS_Android.php";
			include $TmpLoc;
			OS_DROID($CheckUserAgent, $output, $UserAgent);
		} elseif ($CheckUserAgent["os_type"] == "TRUE") {
			Null;
		} elseif ($CheckUserAgent["os_type"] == "TRUE") {
			Null;
		} else {
			Null;
		}
		
		
		return $output;
	}
?>