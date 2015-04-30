<?php
//	Get user IP
function getUserIP(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

//	Grab Data From API's
function getUserAgent() {
	$userAgent = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
	$request = "http://www.useragentstring.com/?uas=" . urlencode( $userAgent) . "&getJSON=all";
	$response = file_get_contents($request);
	return json_decode($response, true);
}
function getGeoIPdata($IP) {
	$request = "http://www.telize.com/geoip/". urlencode($IP);
	$response = file_get_contents($request);
	return json_decode($response, true);
}

function ISP_DB($RawISPname) {
	//Deprecated -- Use ISPs.php
	return $RawISPname;
}

function isThereData($data) {
	if ($data == "") {
		return "FALSE";
	} elseif ($data == "null") {
		return "FALSE";
	} elseif ($data == "Null") {
		return "FALSE";
	} elseif ($data == "na") {
		return "FALSE";
	} elseif ($data == "NA"){
		return "FALSE";
	} elseif ($data == Null){
		return "FALSE";
	} else {
		return "TRUE";
	}
}
?>