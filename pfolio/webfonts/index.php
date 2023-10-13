<?php
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
echo "<pre>";
print_r($result."<br>");echo "</pre>";
$result=json_decode($result);


$country;
$reigon;
if($result->status=='success'){
	$country =  "Country:".$result->country.'<br/>';
	$reigon = "Region:".$result->regionName.'<br/>';
	$city = "City:".$result->city.'<br/>';
	$city = "City:".$result->zip.'<br/>';
	if(isset($result->lat) && isset($result->lon)){
		$lat = "Lat:".$result->lat.'<br/>';
		$lon = "Lon:".$result->lon.'<br/>';
	}
	$iip = "IP:".$result->query.'<br/>';
	
}
echo $country.$reigon.$iip;
?>
