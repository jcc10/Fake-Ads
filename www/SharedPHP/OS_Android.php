<?php
if ($CheckUserAgent["os_name"] == "android") {
	$output["Arch"] = "Android";
	$output["LinuxPannel"] = "FALSE";
	if (preg_match("5.[0-1]", $output["os_versionNumber"]) == 1) {
		$output["FullName"] = "Unknown Android";
		$output["Version"] = "Unknown";
		$output["VersionName"] = "Unknown";
		$output["Producer"] = "Microsoft";
		$output["Producer URL"] = "http://windows.microsoft.com/en-us/windows/home";
		$output["OS_Image"] = "windows_7_logo_glass_by_djmauro96-d58ttl5.png";
		$output["_ImageSrc"] = "http://fc05.deviantart.net/fs71/i/2012/208/0/5/windows_7_logo_glass_by_djmauro96-d58ttl5.png";
		$output["ImageAlt"] = "Windows Flag Outline";
		
	} elseif (preg_match("4.4(W|)((.[1-4])|)", $output["os_versionNumber"]) == 1) {
		$output["FullName"] = "Unknown Android";
		$output["Version"] = "Unknown";
		$output["VersionName"] = "Unknown";
		$output["Producer"] = "Microsoft";
		$output["Producer URL"] = "http://windows.microsoft.com/en-us/windows/home";
		$output["OS_Image"] = "windows_7_logo_glass_by_djmauro96-d58ttl5.png";
		$output["_ImageSrc"] = "http://fc05.deviantart.net/fs71/i/2012/208/0/5/windows_7_logo_glass_by_djmauro96-d58ttl5.png";
		$output["ImageAlt"] = "Windows Flag Outline";
		
	} elseif (preg_match("4.4(W|)((.[1-4])|)", $output["os_versionNumber"]) == 1) {
		$output["FullName"] = "Unknown Android";
		$output["Version"] = "Unknown";
		$output["VersionName"] = "Unknown";
		$output["Producer"] = "Microsoft";
		$output["Producer URL"] = "http://windows.microsoft.com/en-us/windows/home";
		$output["OS_Image"] = "windows_7_logo_glass_by_djmauro96-d58ttl5.png";
		$output["_ImageSrc"] = "http://fc05.deviantart.net/fs71/i/2012/208/0/5/windows_7_logo_glass_by_djmauro96-d58ttl5.png";
		$output["ImageAlt"] = "Windows Flag Outline";
		
	} else {
		$output["FullName"] = "Unknown Android";
		$output["Version"] = "Unknown";
		$output["VersionName"] = "Unknown";
		$output["Producer"] = "Microsoft";
		$output["Producer URL"] = "http://windows.microsoft.com/en-us/windows/home";
		$output["OS_Image"] = "windows_7_logo_glass_by_djmauro96-d58ttl5.png";
		$output["_ImageSrc"] = "http://fc05.deviantart.net/fs71/i/2012/208/0/5/windows_7_logo_glass_by_djmauro96-d58ttl5.png";
		$output["ImageAlt"] = "Windows Flag Outline";
	}
} else {
	$output["Arch"] = "Android?";
	$output["LinuxPannel"] = "TRUE";
	$output["FullName"] = "Unknown Android?";
	$output["Version"] = "Unknown?";
	$output["VersionName"] = "Unknown";
	$output["Producer"] = "Google?";
	$output["Producer URL"] = "http://windows.microsoft.com/en-us/windows/home";
	$output["OS_Image"] = "windows_7_logo_glass_by_djmauro96-d58ttl5.png";
	$output["_ImageSrc"] = "http://fc05.deviantart.net/fs71/i/2012/208/0/5/windows_7_logo_glass_by_djmauro96-d58ttl5.png";
	$output["ImageAlt"] = "Windows Flag Outline";
	$output["Notes"] = "Somehow the os_name is not android... This is not intended to happen so something went wrong!"
}
?>