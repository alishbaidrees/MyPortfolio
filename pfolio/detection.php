<?php
include('config.php');
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);

 if($result->status=='success'){
	$country =  $result->country;
	$reigon = $result->regionName;
	$city = $result->city;
	$zip = $result->zip;
	if(isset($result->lat) && isset($result->lon)){
		$lat = $result->lat;
		$long = $result->lon;
     
	}
	if(isset($result->isp) && isset($result->org)){
		$isp = $result->isp;
		$org = $result->org;

	}
	$iip = $result->query;

}






include('Mobile_Detect.php');
include('BrowserDetection.php');

$browser=new Wolfcast\BrowserDetection;

$browser_name=$browser->getName();
$browser_version=$browser->getVersion();

$detect=new Mobile_Detect();

if($detect->isMobile()){
	$type='Mobile';
}elseif($detect->isTablet()){
	$type='Tablet';
}else{
	$type='PC';
}

if($detect->isiOS()){
	$os='IOS';
}elseif($detect->isAndroidOS()){
	$os='Android';
}elseif($detect->isLinux()){
	$os='linux';
}else{
	$os='Window';
}

$url=(isset($_SERVER['HTTPS'])) ? "https":"http";
$url.="//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$ref='';
if(isset($_SERVER['HTTP_REFERER'])){
	$ref=$_SERVER['HTTP_REFERER'];
}
$sql = "INSERT INTO visitor (browser_name, browser_version, type, os, url, ref, country, city, zip, `long`, lat, isp_org, ip) VALUES 
('$browser_name', '$browser_version', '$type', '$os', '$url', '$ref', '$country', '$city', '$zip', '$long', '$lat', '$isp', '$iip')";
mysqli_query($conn,$sql);
 ?>

