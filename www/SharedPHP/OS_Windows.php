<?php
	function OS_WIN($CheckUserAgent, $output, $UserAgent) {
		if ($CheckUserAgent["os_name"] == "windows xp") {
			$output["FullName"] = "Windows XP";
			$output["Version"] = "XP";
			$output["VersionName"] = "XP";
			$output["Producer"] = "Microsoft";
			$output["Producer URL"] = "http://windows.microsoft.com/en-us/windows/home";
			$output["OS_Image"] = "microsoft-windows-xp.png";
			$output["_ImageSrc"] = "http://www.innominate.com/data/logos/misc/microsoft-windows-xp.png";
			$output["ImageAlt"] = "Windows XP Logo";
			$output["Notes"] = "Windows XP is past it's End Of Lifespan. We highly recommend upgrading since there are no longer updates coming out for XP!";
		} elseif ($CheckUserAgent["os_name"] == "windows vista") {
			$output["FullName"] = "Windows Vista";
			$output["Version"] = "Vista";
			$output["VersionName"] = "Vista";
			$output["Producer"] = "Microsoft";
			$output["Producer URL"] = "http://windows.microsoft.com/en-us/windows/home";
			$output["OS_Image"] = "windows-vista-logo_copy.png";
			$output["_ImageSrc"] = "http://images.ukcs.net/15600/windows-vista-logo_copy.png";
			$output["ImageAlt"] = "Windows Vista Logo";
		} elseif ($CheckUserAgent["os_name"] == "windows 7") {
			$output["FullName"] = "Windows 7";
			$output["Version"] = "7";
			$output["VersionName"] = "7";
			$output["Producer"] = "Microsoft";
			$output["Producer URL"] = "http://windows.microsoft.com/en-us/windows/home";
			$output["OS_Image"] = "w7%20transparent%20logo.png";
			$output["_ImageSrc"] = "http://azod.com.au/images/Computers/Win7OfficeComputers/w7%20transparent%20logo.png";
			$output["ImageAlt"] = "Windows 7 Logo";
		} elseif ($CheckUserAgent["os_name"] == "windows nt") {
			$output["FullName"] = "Windows 8/8.1";
			$output["Version"] = "8/8.1";
			$output["VersionName"] = "8/8.1";
			$output["Producer"] = "Microsoft";
			$output["Producer URL"] = "http://windows.microsoft.com/en-us/windows/home";
			$output["OS_Image"] = "windows_8_vector_logo_by_revengexx14-d4qg0vg.png";
			$output["_ImageSrc"] = "http://fc02.deviantart.net/fs71/i/2012/051/a/f/windows_8_vector_logo_by_revengexx14-d4qg0vg.png";
			$output["ImageAlt"] = "Windows 8/8.1 Logo";
		} else {
			$output["FullName"] = "Unknown Windows";
			$output["Version"] = "Unknown";
			$output["VersionName"] = "Unknown";
			$output["Producer"] = "Microsoft";
			$output["Producer URL"] = "http://windows.microsoft.com/en-us/windows/home";
			$output["OS_Image"] = "windows_7_logo_glass_by_djmauro96-d58ttl5.png";
			$output["_ImageSrc"] = "http://fc05.deviantart.net/fs71/i/2012/208/0/5/windows_7_logo_glass_by_djmauro96-d58ttl5.png";
			$output["ImageAlt"] = "Windows Flag Outline";
		}
		
		return $output;
	}
?>